<?php
 

?>
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
  <title>Contact Me</title>
</head>

<body>
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
                    <li class="nav-item"><a class="nav-link" href="Projects.php">Projects</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li> 
                </ul>
                </div>
        </div>
      </nav>  
  <header>
    <div class="menu-btn">
      <div class="btn-line"></div>
      <div class="btn-line"></div>
      <div class="btn-line"></div>
    </div>

   
  </header>

  <main id="contact">
    <h1 class="lg-heading">
      Contact
      <span class="text-secondary">Me</span>
    </h1>
    <h2 class="sm-heading">
      This is how you can reach me...
    </h2>
    <div class="contact-section">
            <div class="border"></div>
            <br>
                <form class="contact-form" action="#" method="post">
                    <input type="text" name="name" class="contact-form-text" placeholder="Enter Your name">
                    <input type="mail" name="email" class="contact-form-text" placeholder="Your email">
                    <input type="text" name="phone" class="contact-form-text" placeholder="Your phone">
                    <textarea class="contact-form-text"  name="message" placeholder="Your message"></textarea>
                    <button type="button" class="btn btn-outline-info btn-lg btn-block">Send</button>
                    <br>
                    </div>
                </form>
        </div>
  </main>

  <footer id="main-footer">
  </footer>

  <script src="main.js"></script>
</body>

</html>