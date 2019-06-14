<?php
$username = "root";
$password = "";
$root = "localhost";
$db =  "myportfolio";

$link = mysqli_connect( $root , $username , $password , $db);
  if($link->connect_error) {
        echo "<script> console.log('you have an error !!!')</script>";
    } else {
        echo "<script> console.log('connected to MySql successfully')</script>";
    }
    ?>