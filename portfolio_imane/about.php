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
    <title><?php echo $lang['about me'] ?></title>
</head>

<body id="bg-img">
    <header>
        
        <!--Navbar -->

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

    <!-- the about section -->

    <main id="about">
        <h1 class="lg-heading">
            <?php echo $lang['part1'] ?>
            <span class="text-secondary"><?php echo $lang['part2'] ?></span>
        </h1>
        <h2 class="sm-heading">
            <?php echo $lang['phrase1'] ?>
        </h2>
        <div class="about-info">
            <img src="img/portrait.png" alt="Imane el kasmi" class="bio-image">

            <div class="bio">
                <h3 class="text-secondary">BIO</h3>
                <p><?php echo $lang['para1'] ?>
                    <br><?php echo $lang['para2'] ?>
                    <br><?php echo $lang['para3'] ?>
                </p>
            </div>

            <div class="job job-1">
                <h3><?php echo $lang['metier1'] ?></h3>
                <br>
                <p><?php echo $lang['desc1'] ?></p>
                <br>
            </div>

            <div class="job job-2">
                <h3><?php echo $lang['metier2'] ?></h3>
                <br>
                <p><?php echo $lang['desc2'] ?></p>
            </div>

            <div class="job job-3">
                <h3><?php echo $lang['metier3'] ?></h3>
                <br>
                <p><?php echo $lang['desc3'] ?></p>
                <br>
            </div>
        </div>
    </main>

    <!-- the progress bar -->


    <div class="skills">
        <h1 class="lg-heading"><?php echo $lang ['My'] ?><span
                class="text-secondary"><?php echo $lang['Skills'] ?></span>
        </h1>
        <h2 class="sm-heading">
            <?php echo $lang['technologies'] ?>
        </h2>
    </div>
    <br>
    <div class="container">
        <div class="myProgress">
            <div class="myBar" style="text-align:right;height:10px;"></div>
            <p class="HTML" style="display:inline;float:left;"> bootstrap</p>
            <p class="num" style="display:inline;float:right;">0%</p>
        </div>
        <br> <br>
        <div class="myProgress">
            <div class="myBar" style="text-align:right;height:10px;"></div>
            <p class="HTML" style="display:inline;float:left;">HTML / HTML5</p>
            <p class="num" style="display:inline;float:right;">0%</p>
        </div>
        <br> <br>
        <div class="myProgress">
            <div class="myBar" style="text-align:right;height:10px;"></div>
            <p class="HTML" style="display:inline;float:left;"> CSS / CSS3 </p>
            <p class="num" style="display:inline;float:right;">0%</p>
        </div>
        <br> <br>
        <div class="myProgress">
            <div class="myBar" style="text-align:right;height:10px;"></div>
            <p class="HTML" style="display:inline;float:left;"> PHP</p>
            <p class="num" style="display:inline;float:right;">0%</p>
        </div>
        <br> <br>
        <div class="myProgress">
            <div class="myBar" style="text-align:right;height:10px;"></div>
            <p class="HTML" style="display:inline;float:left;"> MYSQL</p>
            <p class="num" style="display:inline;float:right;">0%</p>
        </div>
        <br> <br>
        <div class="myProgress">
            <div class="myBar" style="text-align:right;height:10px;"></div>
            <p class="HTML" style="display:inline;float:left;">Javascript / jquery </p>
            <p class="num" style="display:inline;float:right;">0%</p>
        </div>
        <br><br>
    </div>
    <br>
    <script>
    var exec = true;

    function move(x, y, z) {
        var elem = document.getElementsByClassName(y)[z];
        var num = document.getElementsByClassName("num")[z];
        var width = 0;
        var id = setInterval(frame, 15);

        function frame() {
            if (width >= x) {
                clearInterval(id);
            } else {
                width++;
                elem.style.width = width + '%';
                num.innerText = width + "%";

            }
        }
    }

    function animate() {
        move(90, "myBar", 0);
        move(85, "myBar", 1);
        move(60, "myBar", 2);
        move(50, "myBar", 3);
        move(45, "myBar", 4);
        move(35, "myBar", 5);

    }
    about = document.getElementById("about");
    about.addEventListener("mouseenter", animate);
    </script>

    <!-- footer and flags -->

    <footer id="main-footer">
        <div class="footer-text text-center">
            <a  href="about.php?lang=en" ><?php echo $lang['english'] ?><a/> |
            <a href="about.php?lang=fr"><?php echo $lang['french'] ?></a>
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