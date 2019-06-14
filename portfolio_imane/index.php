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
    <title><?php echo $lang['index-title'] ?></title>
</head>

<body id="bg-img">
    <header>

<!-- nabvar -->

        <nav id="sticky-nav" class="navbar fixed-top navbar-expand-lg navbar navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand"><img id="logo" src="img/dice.png" style="width: 40px;" alt="logo"></a>

                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto w-100 justify-content-end">
                        <li class="nav-item"><a class="nav-link" href="index.php"><?php echo $lang['home'] ?></a></li>
                        <li class="nav-item"><a class="nav-link" href="about.php"><?php echo $lang['about'] ?></a></li>
                        <li class="nav-item"><a class="nav-link" href="projects.php"><?php echo $lang['projects'] ?></a>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="contact.php"><?php echo $lang['Contact'] ?></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main id="home">
        <h1 class="lg-heading">
            <?php echo $lang['Imane'] ?>
            <span class="text-secondary"><?php echo $lang['EL kasmi'] ?></span></h1>
        <h2 class="sm-heading"><?php echo $lang['metier*'] ?></h2>
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
        <div class=download-btn>
            <a href="cv-imane.pdf" download>

                <!-- Button trigger modal -->

                <button type="button" class="btn btn-warning" data-toggle="modal"
                    data-target="#exampleModal"><?php echo $lang['Download'] ?></button>

                <!-- Modal -->

                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel"><?php echo $lang['thank you'] ?></h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                            <?php echo $lang['modal-text'] ?>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal"><?php echo $lang['close'] ?></button>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </main>

    <!-- footer and flags -->

    <footer id="main-footer">
        <div class="footer-text text-center">
            <a  href="index.php?lang=en" ><?php echo $lang['english'] ?><a/> |
            <a href="index.php?lang=en"><?php echo $lang['french'] ?></a>
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