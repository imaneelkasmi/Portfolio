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
  <title>About Me</title>
</head>

<body>
  <header>
    <div class="menu-btn">
      <div class="btn-line"></div>
      <div class="btn-line"></div>
      <div class="btn-line"></div>
    </div>


 <!--Navbar -->

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
  <main id="about">
    <h1 class="lg-heading">
    about
      <span class="text-secondary">Me</span>
    </h1>
    <h2 class="sm-heading">
      Let me tell you a few things...
    </h2>
    <div class="about-info">
      <img src="img/portrait.png" alt="John Doe" class="bio-image">

      <div class="bio">
        <h3 class="text-secondary">BIO</h3>
        <p>My name Is Imane, I'm a beginner web developer and designer, and ready for new opportunities. I am a very passionate person, fast learner, hard worker and team player.
                    <br>I am familiar with HTML, CSS, Bootstrap, Flexbox, Javascript, jQuery, PHP, SQL, Github,adobe illustrator and Photoshop.
                    <br>A bit about me: I love music, the arts, tech and all things creative.
		            </p>
       </div>

      <div class="job job-1">
        <h3>Front End Developer</h3>
        <br>
        <p>I'm using technologies releated to front end developing as html, Css3 and Javascript and thier frameworks.</p>
        <br>
      </div>

      <div class="job job-2">
        <h3>BACK END Developer</h3>
        <br>
        <p>building a website require a good set of skills cocerning server side technologies too, and I have a knowledge when it come to SQL, PHP and python.</p>
      </div>

      <div class="job job-3">
        <h3>designer</h3>
        <br>
        <p>I use Adobe Creative Suit for graphic design in order to take the idea from the abstract phase to the concret one.</p>
        <br>
      </div>
    </div>
  </main>

  <div class="skills">
  <h1 class="lg-heading">
      MY
      <span class="text-secondary">SKILLS</span>
    </h1>
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
    <br> <br><div class="myProgress">
      <div class="myBar" style="text-align:right;height:10px;"></div>
      <p class="HTML" style="display:inline;float:left;"> PHP</p>
      <p class="num" style="display:inline;float:right;">0%</p>
    </div>
    <br> <br>
    <div class="myProgress">
      <div class="myBar" style="text-align:right;height:10px;"></div>
      <p class="HTML" style="display:inline;float:left;">  MYSQL</p>
      <p class="num" style="display:inline;float:right;">0%</p>
    </div>
    <br> <br>
    <div class="myProgress">
      <div class="myBar" style="text-align:right;height:10px;"></div>
      <p class="HTML" style="display:inline;float:left;">Javascript / jquery </p>
      <p class="num" style="display:inline;float:right;">0%</p>
    </div>
    <br>
    <script>
    var exec = true;

    function move(x,y,z) {
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
    function animate(){
      move(90,"myBar",0);
      move(85,"myBar",1);
      move(60,"myBar",2);
      move(50,"myBar",3);
      move(45,"myBar",4);
      move(35,"myBar",5);



    }

      about = document.getElementById("about");
      about.addEventListener("mouseenter",animate);


    </script>
</div>
</body>

</html>