<?php 
include "config.php";
include 'admin/db.php';
require 'admin/session.php';
Session::start();
$select = $db->query('SELECT id, name, description, image, lien FROM tab');

$tab = $select->fetchAll();
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
    <title><?php echo $lang['title-projects'] ?></title>
    <link rel="icon" type="image/ico" href="img/dice.png">

</head>

<body id="bg-img">
    <header>
        
<!-- navbar -->

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
                        <li class="nav-item"><a class="nav-link" href="projects.php"><?php echo $lang['projects'] ?></a></li>
                        <li class="nav-item"><a class="nav-link" href="contact.php"><?php echo $lang['Contact'] ?></a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <section id="Pro">
        <div id=projects-title>
        <br><br>
        <h1 class="lg-heading"><?php echo $lang['My'] ?><span class="text-secondary"><?php echo $lang['projects'] ?></span>
        </h1>
        <h2 class="sm-heading"><?php echo $lang['Let me'] ?></h2>
        </div>
        <!-- cards -->

        <div class="row">

<div class="container mt-5">
	<div class="row">
	<?php  foreach($tab as $tabs): ?>
  <div class="col-md-3">
              <div class="articls-box shadow-lg p-3 mb-5">
                <div>
                  <img src="img/projects/<?= $tabs['image'];?>" alt="" class="img-fluid">
                </div>
                <div>
                  <h2 class="card-title a-title"><?=$tabs['name']; ?></h2>
                  <p class="a-description text-center">
                  <?=$tabs['description']; ?>
                  </p>
                  <p>
                    <a class="more-link" style="color:black;" href="<?= $tabs['lien'];?>" target="_blank"><i class="fas fa-external-link-alt"></i>En savoir plus</a></p>
                </div>
              </div>
          </div> 
          <?php endforeach; ?>
    </section>

    <!-- footer and flags -->

    <footer id="main-footer">
        <div class="footer-text text-center">
            <a  href="projects.php?lang=en" ><?php echo $lang['english'] ?><a/> |
            <a href="projects.php?lang=en"><?php echo $lang['french'] ?></a>
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