<?php
session_start();
if(!isset($_SESSION['user'])){
     header('Location:session.php');
  }
?>

<h1>Welcom To Your Profile  to logout Click here <a href="logout.php">Logout</a></h1>

