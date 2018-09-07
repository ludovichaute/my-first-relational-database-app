
<?php session_start (); ?>
<?php require '../controllers/DB_user_type.php'; ?> 
<?php include 'header.php'; ?>
        <body>

             <nav class="navbar navbar-expand-lg navbar-light bg-light">
              <a class="navbar-brand" href="#"><img src="./images/logo_cogip2.png" alt="logo"  width="25%" class=""></a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav mr-auto">
                  <li class="nav-item ">
                    <a class="nav-link" href="accueil-page.php">Accueil</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="fourni-page.php">Fournisseurs</a>
                  </li>
                  <li class="nav-item active">
                    <a class="nav-link"  href="Client-page.php">Clients<span class="sr-only">(current)</span></a>
                  </li>
                </ul>
                <span class="navbar-text">
                <a href="../controllers/logout.php">Deconnection</a>
                </span>
              </div>
            </nav>

            <div class="jumbotron jumbotron-fluid ">
              <div class="container ">
                <h1 class="display-4 align-middle ">Clients</h1>
              </div>
            </div>

            
            
            
      <?php include 'footer.php'; ?> 
 
      </body>

</html>