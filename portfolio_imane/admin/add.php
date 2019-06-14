 <?php 
include 'db.php';
require 'session.php';

session_start();

    

if(isset($_SESSION['user'])){ 

    /** Traitement Table Work */
        try{
            if(isset($_POST['name'])  && isset($_POST['description']) && isset($_POST['image']) && isset($_POST['lien'])){
                $name = $db->quote($_POST['name']);
                $description = $db->quote($_POST['description']);
                $image = $db->quote($_POST['image']);
                $lien = $db->quote($_POST['lien']);
                

                $query = "INSERT INTO tab(`name`, `image`, `description`, `lien`) VALUES ($name,$image,$description,$lien)";
                $select = $db->query($query);
                if(!empty($select)){
                    header('Location:../projects.php');                
                } else {
                    $msg="Error Work";
                }
            }
        }catch(Exception $e){
            $msg ='Exception Work';
        }
        /***************** */

        
       
}else{
    $msg ='Erreur POST';
   header("Location:login.php");
    
}

?>


 <!doctype html>
 <html lang="en">

 <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <meta name="description" content="">
     <meta name="author" content="">
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css"
         integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
         integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


     <title>Admin</title>
     <style>
     #sticky-nav {
         overflow: hidden;
         opacity: 0.87;
         top: 0;
         width: 100%;
         border-bottom: 4px solid #eece1a;
         padding-bottom: 10px;
     }

     #navbarSupportedContent {
         font-size: 20px;
     }

     #navbarSupportedContent a:hover {
         color: #eece1a;
     }

     .bg-black {
         background-color: #2d3436;
         background-image: linear-gradient(315deg, #2d3436 0%, #000000 74%);
     }

     .main {
         height: 64vh;
         display: flex;
         justify-content: center;
         align-items: center;
         flex-direction: column;
         margin-top: 7rem;
     }

     body {
         margin: 0;
         padding: 0;
         height: 47.1rem;
         background: url(../img/back-ground.jpg) no-repeat center center fixed;
         background-size: cover;
         background-position: center;
         background-repeat: no-repeat;
         font-family: sans-serif;
     }
     </style>
 </head>

 <body>

     <nav id="sticky-nav" class="navbar fixed-top navbar-expand-lg navbar navbar-dark bg-dark">
         <div class="container">
             <a class="navbar-brand"><img id="logo" src="../img/Imane_logo.png" style="width: 40px;" alt="logo"></a>
             <!-- <li><a href="accueil.php"><img id="logo" src="img/logo.png" style="width: 40px;"> </a></li> -->
             <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                 <span class="navbar-toggler-icon"></span>
             </button>
             <div class="collapse navbar-collapse" id="navbarSupportedContent">
                 <ul class="navbar-nav mr-auto w-100 justify-content-end">
                     <li class="nav-item"><a class="nav-link" href="add.php">Add</a></li>
                     <li class="nav-item"><a class="nav-link" href="delete.php">Delete</a></li>
                     <li class="nav-item"><a class="nav-link" href="../index.php">Logout</a></li>
                 </ul>
             </div>
         </div>
     </nav>
     <main class="main">


         <div class="container">
             <div class="row">
                 <form method="POST" action="">
                     <div class="form-group pb-4">
                         <input type="text" class="form-control" id="name" name="name" aria-describedby="name"
                             placeholder="Nom">

                     </div>

                     <div class="form-group pb-4">
                         <input type="text" class="form-control" id="description" name="description"
                             aria-describedby="description" placeholder="description">

                     </div>
                     <div class="form-group pb-4">
                         <input type="text" class="form-control" id="lien" name="lien" aria-describedby="lien"
                             placeholder="lien">
                     </div>

                     <div class="form-group">
                         <input type="file" class="form-control-file" name="image" id="exampleFormControlFile1">
                     </div>


                     <button type="submit" class="btn btn-warning mt-2">ajouter</button>
                 </form>
             </div>
         </div>

         <!-- FOOTER -->
         <footer class="container">

         </footer>
     </main>



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