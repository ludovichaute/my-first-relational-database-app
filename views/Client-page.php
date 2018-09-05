
 <?php session_start (); ?>

<!doctype html>
    <html lang="en">
        <head>
            <title>COGIP</title>
            <link rel="stylesheet" type="text/css" href="./css/style.css" >
            <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
            <meta charset="utf-8">
	        <meta http-equiv="X-UA-Compatible" content="IE=edge">
	        <meta name="viewport" content="width=device-width, initial-scale=1">
	        <meta name="keywords" content="footer, address, phone, icons" />

	        <link rel="stylesheet" href="./demo.css">
	        <link rel="stylesheet" href="./footer.css">

	        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

	        <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
        </head>
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
                <a href="./logout.php">Deconnection</a>
                </span>
              </div>
            </nav>

            <div class="jumbotron jumbotron-fluid ">
              <div class="container ">
                <h1 class="display-4 align-middle ">Clients</h1>
              </div>
            </div>

            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>  
      <?php include 'footer.php'; ?> 
 
      </body>

</html>