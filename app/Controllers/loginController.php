<?php

namespace app\Controllers;

use app\Models\mainModel;

class loginController extends mainModel
{
    /*----------  Controlador iniciar sesion  ----------*/
    public function startSessionController()
    {

        $email = $this->clearChain($_POST['email']);
        $password = $this->clearChain($_POST['password']);

        # Verificando campos obligatorios #
        if ($email == "" || $password == "") {
            echo "<script>
			        Swal.fire({
					  icon: 'error',
					  title: 'Ocurrió un error inesperado',
					  text: 'No has llenado todos los campos que son obligatorios'
					});
				</script>";
        } else {

            # Verificando integridad de los datos #
            if ($email == " ") {
                echo "<script>
				        Swal.fire({
						  icon: 'error',
						  title: 'Ocurrió un error inesperado',
						  text: 'El USUARIO no coincide con el formato solicitado'
						});
					</script>";
            } else {

                # Verificando integridad de los datos #
                if ($this->verifiedData("[a-zA-Z0-9$@.-]{7,100}", $password)) {
                    echo "<script>
					        Swal.fire({
							  icon: 'error',
							  title: 'Ocurrió un error inesperado',
							  text: 'La CLAVE no coincide con el formato solicitado'
							});
						</script>";
                } else {

                    # Verificando usuario #
                    $check_user = $this->execConsult("SELECT * FROM users WHERE user_email='$email'");

                    if ($check_user->rowCount() == 1) {

                        $check_user = $check_user->fetch();

                        if ($check_user['user_email'] == $email && password_verify($password, $check_user['user_password'])) {

                            $_SESSION['id'] = $check_user['user_id'];
                            $_SESSION['nombre'] = $check_user['user_name'];
                            $_SESSION['usuario'] = $check_user['user_user'];
                            $_SESSION['foto'] = $check_user['user_photo'];
                            $_SESSION['loggedin'] = true;

                            if ($check_user['user_user'] == "administrador") {
                                if (headers_sent()) {
                                    echo "<script> window.location.href='" . APP_URL . "home-admin/'; </script>";
                                } else {
                                    header("Location: " . APP_URL . "home-admin/");
                                }
                            } else {
                                if (headers_sent()) {
                                    echo "<script> window.location.href='" . APP_URL . "home/'; </script>";
                                } else {
                                    header("Location: " . APP_URL . "home/");
                                }
                            }
                        } else {
                            echo "<script>
							        Swal.fire({
									  icon: 'error',
									  title: 'Ocurrió un error inesperado',
									  text: 'Usuario o clave incorrectos'
									});
								</script>";
                        }
                    } else {
                        echo "<script>
						        Swal.fire({
								  icon: 'error',
								  title: 'Ocurrió un error inesperado',
								  text: 'Usuario o clave incorrectos'
								});
							</script>";
                    }
                }
            }
        }
    }


    /*----------  Controlador cerrar sesion  ----------*/
    public function closeSessionController()
    {

        session_destroy();

        if (headers_sent()) {
            echo "<script> window.location.href='" . APP_URL . "login/'; </script>";
        } else {
            header("Location: " . APP_URL . "login/");
        }
    }
}
