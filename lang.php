<?php
$data = [
    'ar'=>"مرحبا بكم",
    "fr"=>"Bienveue",
    "en"=>"Welcom"
];

$t = (isset($_COOKIE['languge']))?$_COOKIE['languge']:'ar';
$lang= (isset($_GET['lang']))?$_GET['lang']:$t;
setcookie('languge',"$lang",time()+60);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="css/ligth.css">
</head>
<body>
<a href="?lang=ar">Arabic</a>
<a href="?lang=fr">Franch</a>
<a href="?lang=en">English</a>

<h3><?= $data["$lang"] ?></h3>
</body>
</html>
