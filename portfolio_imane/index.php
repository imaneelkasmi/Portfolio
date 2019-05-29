<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Portfolio">
  <meta name="keywords" content="HTML,CSS,XML,JavaScript">
  <meta name="author" content="Imane ELKASMI">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ"
    crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


  <link rel="stylesheet" href="main.css">
  <title>Welcome To My Portfolio</title>
</head>

<body id="bg-img">
  <header>
    <div class="menu-btn">
      <div class="btn-line"></div>
      <div class="btn-line"></div>
      <div class="btn-line"></div>
    </div>

    <nav id="sticky-nav" class="navbar fixed-top navbar-expand-lg navbar navbar-dark bg-dark">
        <div class="container">
                <a class="navbar-brand"><img id="logo" src="img/dice.png" style="width: 40px;"></a>
                <!-- <li><a href="accueil.php"><img id="logo" src="img/logo.png" style="width: 40px;"> </a></li> -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto w-100 justify-content-end">
                    <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="projects.php">Projects</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li> 
                </ul>
                </div>
        </div>
      </nav>  
  </header>

  <main id="home">
    <h1 class="lg-heading">
      Imane
      <span class="text-secondary">EL kasmi</span>
    </h1>
    <h2 class="sm-heading">
      Web Developer
    </h2>
    <div class="icons">
      <a href="https://twitter.com/ImaneELKasmi1">
        <i class="fab fa-twitter fa-2x"></i>
      </a>
      <a href="https://www.facebook.com/profile.php?id=100008088104921">
        <i class="fab fa-facebook fa-2x"></i>
      </a>
      <a href="https://www.linkedin.com/feed/">
        <i class="fab fa-linkedin fa-2x"></i>
      </a>
      <a href="https://github.com/imaneelkasmi">
        <i class="fab fa-github fa-2x"></i>
      </a>
    </div>
  </main>

  <script src="main.js"></script>
</body>

</html>