   <nav class="navbar" role="navigation" aria-label="main navigation">
       <div class="navbar-brand">
           <a class="navbar-item" href="<?php echo APP_URL; ?>home/">
               <img src=" <?php echo APP_URL; ?>app/views/img/Logo_sc.svg" width="112" height="28">
           </a>

           <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
               <span aria-hidden="true"></span>
               <span aria-hidden="true"></span>
               <span aria-hidden="true"></span>
           </a>
       </div>

       <div id="navbarBasicExample" class="navbar-menu">
           <div class="navbar-start">
               <a class="navbar-item" href="<?php echo APP_URL; ?>home/">
                   Home
               </a>

               <a class="navbar-item" href="<?php echo APP_URL; ?>products/">
                   Products
               </a>


               <div class="navbar-item has-dropdown is-hoverable">
                   <a class="navbar-link">
                       More
                   </a>

                   <div class="navbar-dropdown">
                       <a class="navbar-item" href=" <?php echo APP_URL; ?>about/">
                           About
                       </a>
                       <a class="navbar-item" href="<?php echo APP_URL; ?>faq/">
                           FAQ
                       </a>
                       <a class="navbar-item" href="<?php echo APP_URL; ?>contact/">
                           Contact
                       </a>
                       <hr class="navbar-divider">
                       <a class="navbar-item" href="<?php echo APP_URL; ?>report-issue/">
                           Report an issue
                       </a>
                   </div>
               </div>
           </div>

           <div class="navbar-end">
               <div class="navbar-item">
                   <div class="buttons">
                       <a class="button is-link" href="<?php echo APP_URL; ?>register/">
                           <strong>Sign up</strong>
                       </a>
                       <a class="button is-light" href="<?php echo APP_URL; ?>login/">
                           Log in
                       </a>
                   </div>
               </div>
           </div>
       </div>
   </nav>