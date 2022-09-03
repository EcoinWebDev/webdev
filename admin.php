<?php
session_start();
if(!isset($_SESSION['user'])){
     header('Location:session.php');
  }
?>

<h1>Welcom To Your Profile </h1>