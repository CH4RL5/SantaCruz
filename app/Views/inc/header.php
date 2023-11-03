   <nav class="navbar" role="navigation" aria-label="main navigation">
       <div class="navbar-brand">
           <a class="navbar-item" href="#">
               <img src="./app/Views/img/Logo_sc.svg" width="112" height="28">
           </a>

           <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
               <span aria-hidden="true"></span>
               <span aria-hidden="true"></span>
               <span aria-hidden="true"></span>
           </a>
       </div>

       <div id="navbarBasicExample" class="navbar-menu">
           <div class="navbar-start">
               <a class="navbar-item" href="./app/Views/Home.php">
                   Home
               </a>

               <a class="navbar-item">
                   Products
               </a>


               <div class="navbar-item has-dropdown is-hoverable">
                   <a class="navbar-link">
                       More
                   </a>

                   <div class="navbar-dropdown">
                       <a class="navbar-item">
                           About
                       </a>
                       <a class="navbar-item">
                           FAQ
                       </a>
                       <a class="navbar-item">
                           Contact
                       </a>
                       <hr class="navbar-divider">
                       <a class="navbar-item">
                           Report an issue
                       </a>
                   </div>
               </div>
           </div>

           <div class="navbar-end">
               <div class="navbar-item">
                   <div class="buttons">
                       <a class="button is-link ">
                           <strong>Sign up</strong>
                       </a>
                       <a class="button is-light" href="<?php header("login.php") ?>">
                           Log in
                       </a>
                   </div>
               </div>
           </div>
       </div>
   </nav>