<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Report an Issue</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&display=swap" rel="stylesheet">

    <style>
        /* Estilos CSS para el fondo de pantalla */
        .contenedorReport {
            background-image: url('https://img.nhs-info.com/heroes/santa_cruz_skateboards_classic_dot_desktop_1699999575.jpg');
            background-size: cover;
            /* Ajustar la imagen al tamaño de la ventana */
            background-position: center;
            /* Centrar la imagen */
            background-repeat: no-repeat;
            /* No repetir la imagen */
            height: 100vh;
            /* Hacer que el fondo cubra toda la altura de la ventana */
            margin: 0;
            /* Eliminar márgenes predeterminados del cuerpo */
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }



        /* Estilos CSS para txt */
        .contenedorReport {
            text-align: center;

            background-color: #f0f0f0;
            /* Color de fondo del cuerpo */
            /* Color de texto principal */
            font-family: Arial, sans-serif;
            /* Tipo de fuente del texto */
            font-size: 1.2em;
            /* Tamaño de letra del párrafo */
        }


        /* Estilos CSS para la imagen */
        .imgReport {
            width: 77px;
            /* Ancho de la imagen */
            height: auto;
            /* Altura automática para mantener la proporción */
            margin: 0;
            /* Eliminar márgenes */
            padding: 0;
            /* Eliminar relleno */
            position: absolute;
            /* Posicionamiento absoluto */
            top: 0;
            /* Alinear en la parte superior */
            left: 0;
            /* Alinear a la izquierda */
        }



        /* Estilos CSS para dar formato al cuadro de texto */
        input[type="text"] {
            width: 300px;
            /* Ancho del cuadro de texto */
            height: 100px;
            /* Altura del cuadro de texto */
            padding: 10px;
            /* Relleno interno del cuadro de texto */
            box-sizing: border-box;
            /* Incluir el relleno y el borde en el ancho total */
            border: 5px;
            margin: 5px;
        }
    </style>

</head>


<body class="bodyContainer">
    <?php require_once "./app/views/inc/navbar.php" ?>
    <div class="contenedorReport">
        <div class="contenedor-hijo">
            <!-- <div class="caja">
                <img src="https://santacruzskateboards.com/images/logos/santa-cruz-skateboards.png" class="imgReport">
            </div> -->

            <h1 class="Titulo"> Report an Issue </h1>
            <div class="txttitulo">Write a short description of the problem or error.
            </div>


            <form>
                <label for="miCuadroTexto"></label>
                <input type="text" id="miCuadroTexto" name="miCuadroTexto" placeholder="Write here">

                <br>
                <br>
                <br>

                <div class="txttitulo">Enter your email address.
                </div>

            </form>


            <form>
                <label for="miCuadroTexto"></label>
                <input type="text" id="miCuadroTexto" name="miCuadroTexto" placeholder="Write here">

                <br>

                <input type="submit" class="button is-warning " value="Send to">
            </form>


</body>

</html>