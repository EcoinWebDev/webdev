<?php
session_start();
$email = (isset($_POST['email']))?$_POST['email']:null;
$password = (isset($_POST['password']))?$_POST['password']:null;
$send = (isset($_POST['send']))?$_POST['send']:null;

if($send == 'ok'){
    if(($email=="info@ecoin.dz")&&($password=="123")){
        $_SESSION['user'] = $email;
        header('Location:admin.php');
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="css/ligth.css">
</head>
<body>
<form action="" method="post">
    <div>
        <input type="email" name="email" placeholder="Email">
    </div>

    <div>
        <input type="password" name="password" placeholder="Password">
    </div>
    <input type="hidden" name="send"  value="ok">
    <div>
        <button type="submit">Login</button>
    </div>
</form>
</body>
</html>
