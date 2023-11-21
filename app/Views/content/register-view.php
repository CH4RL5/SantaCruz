<section class="h-100">
    <div class="container h-100">
        <div class="row justify-content-sm-center h-100">
            <div class="col-xxl-4 col-xl-5 col-lg-5 col-md-7 col-sm-9">
                <div class="text-center my-5">
                    <a href="<?php echo APP_URL; ?>home/"><img src="<?php echo APP_URL; ?>app/views/img/Logo-2.svg" alt="logo" width="100"></a>
                </div>
                <div class="card shadow-lg">
                    <div class="card-body p-5">
                        <h1 class="fs-4 card-title fw-bold mb-4">Register</h1>
                        <form class="FormAjax" action="<?php echo APP_URL; ?>app/ajax/userAjax.php" method="POST" autocomplete="off" enctype="multipart/form-data">
                            <input type="hidden" name="module_user" value="register">
                            <div class="mb-3">
                                <label class="mb-2 text-muted" for="name">Name</label>
                                <input id="name" type="text" class="form-control" name="name_user" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{3,40}" value="" required autofocus>
                                <div class="invalid-feedback">
                                    Name is required
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="mb-2 text-muted" for="email">E-Mail Address</label>
                                <input id="email" type="email" class="form-control" name="email_user" value="" required>
                                <div class="invalid-feedback">
                                    Email is invalid
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="mb-2 text-muted" for="password">Password</label>
                                <input id="password" type="password" class="form-control" name="password_user" pattern="[a-zA-Z0-9$@.-]{7,100}" maxlength="100" required>
                                <div class="invalid-feedback">
                                    Password is required
                                </div>
                            </div>

                            <p class="form-text text-muted mb-3">
                                By registering you agree with our terms and condition.
                            </p>

                            <div class="align-items-center d-flex">
                                <button type="submit" class="button is-warning ms-auto">
                                    Register
                                </button>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer py-3 border-0">
                        <div class="text-center">
                            Already have an account? <a href="<?php echo APP_URL; ?>login/" class="text-dark">Login</a>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-5 text-muted">
                    Copyright &copy; 2017-2021 &mdash; Santa Cruz Skateboards
                </div>
            </div>
        </div>
    </div>
</section>