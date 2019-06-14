<?php
include 'db.php'; 
require 'session.php';
session_start();
session_destroy();
header("Location:login.php");
?>