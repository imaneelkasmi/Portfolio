<?php
        session_start();

        if (!isset($_SESSION['lang']))
           $_SESSION['lang'] = "en";
        else if (isset($_GET['lang']) && $_SESSION['lang'] != $_GET['lang'] && !empty($_GET['lang'])){
          if ($_GET['lang'] == "en")
              $_SESSION['lang'] ="en";
        else if ($_GET['lang'] == "fr")
              $_SESSION['lang'] = "fr";
        }
       // echo "choose language: " . $_SESSION['lang'];
       require_once"languages/" . $_SESSION['lang'] .".php";
 ?>