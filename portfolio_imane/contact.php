<?php
    include "config.php";
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="hello i am imane el kasmi and this is my Portfolio">
    <meta name="keywords" content="HTML,CSS,bootstrap,JavaScript,imane el kasmi, portfolio, youcode,php,yellow,">
    <meta name="author" content="Imane ELKASMI">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css"
        integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title><?php echo $lang['contact-title'] ?></title>
    <link rel="icon" type="image/ico" href="img/dice.png">
</head>

<body id="bg-img">

<!-- navbar -->

    <nav id="sticky-nav" class="navbar fixed-top navbar-expand-lg navbar navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand"><img id="logo" src="img/dice.png" style="width: 40px;" alt="logo"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto w-100 justify-content-end">
                        <li class="nav-item"><a class="nav-link" href="index.php"><?php echo $lang['home'] ?></a></li>
                        <li class="nav-item"><a class="nav-link" href="about.php"><?php echo $lang['about'] ?></a></li>
                        <li class="nav-item"><a class="nav-link" href="projects.php"><?php echo $lang['projects'] ?></a></li>
                        <li class="nav-item"><a class="nav-link" href="contact.php"><?php echo $lang['Contact'] ?></a></li>
                    </ul>
                </div>
        </div>
    </nav>
    <header>
        
    </header>

<!-- contact form -->

    <main id="contact">
        <h1 class="lg-heading"><?php echo $lang['Contact**'] ?><span class="text-secondary"><?php echo $lang['Me'] ?></span>
        </h1>
        <h2 class="sm-heading"><?php echo $lang['phrase-contact'] ?></h2>
        <div class="contact-section">
            <form class="contact-form" action="#" method="post">
                <input type="text" name="name" class="contact-form-text" placeholder="Enter Your name">
                <input type="mail" name="email" class="contact-form-text" placeholder="Your email">
                <input type="text" name="phone" class="contact-form-text" placeholder="Your phone">
                <textarea class="contact-form-text" name="message" placeholder="Your message"></textarea>
                <button type="button" class="btn btn-warning btn-lg btn-block"><?php echo $lang['Send'] ?></button>
        </div>
        </form>
        </div>
    </main>

    <!-- footer and flags -->

    <footer id="main-footer">
        <div class="footer-text text-center">
            <a  href="contact.php?lang=en" ><?php echo $lang['english'] ?><a/> |
            <a href="contact.php?lang=en"><?php echo $lang['french'] ?></a>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>