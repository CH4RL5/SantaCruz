<nav class="navbar">
    <div class="navbar-brand">
        <a class="navbar-item" href="#">
            <img src="<?php echo APP_URL; ?>app/views/img/Logo_sc.svg" alt="Bulma" width="112" height="28">
        </a>
        <div class="navbar-burger" data-target="navbarExampleTransparentExample">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>

    <div id="navbarExampleTransparentExample" class="navbar-menu">

        <div class="navbar-start">
            <a class="navbar-item" href="<?php echo APP_URL; ?>home-admin/">
                Dashboard
            </a>

            <div class="navbar-item has-dropdown is-hoverable">
                <a class="navbar-link" href="#">
                    Products
                </a>
                <div class="navbar-dropdown is-boxed">

                    <a class="navbar-item" href="<?php echo APP_URL; ?>new-product/">
                        New
                    </a>
                    <a class="navbar-item" href="<?php echo APP_URL; ?>list-product/">
                        List
                    </a>
                    <a class="navbar-item" href="<?php echo APP_URL; ?>search-product/">
                        Search
                    </a>

                </div>
            </div>
        </div>

        <div class="navbar-end">
            <div class="navbar-item has-dropdown is-hoverable">
                <a class="navbar-link">
                    <strong>** <?php echo $_SESSION['nombre']; ?> ** </strong>
                </a>
                <div class="navbar-dropdown is-boxed">

                    <a class="navbar-item" href="<?php echo APP_URL . "user-update/" . $_SESSION['id'] . "/"; ?>">
                        Profile
                    </a>
                    <a class="navbar-item" href="<?php echo APP_URL; ?>user-photo/">
                        Photo
                    </a>
                    <hr class="navbar-divider">
                    <a class="navbar-item" href="<?php echo APP_URL; ?>logout/" id="btn_exit">
                        Exit
                    </a>

                </div>
            </div>
        </div>

    </div>
</nav>