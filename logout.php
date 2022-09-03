<?php
session_start();

session_destroy();
setcookie('PHPSESSID','go out',time()-60*60);
unset($_SESSION);

header('Location:session.php');