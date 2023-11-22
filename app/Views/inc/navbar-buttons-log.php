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