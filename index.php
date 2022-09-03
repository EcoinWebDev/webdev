<?php
$t = (isset($_COOKIE['theme']))?$_COOKIE['theme']:'ligth';
$theme = (isset($_GET['th']))?$_GET['th']:$t;
setcookie('theme',"$theme",time()+60);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="css/<?php echo $theme; ?>.css">
</head>
<body>
    <a href="index.php?th=dark">Darl mode</a>
    <a href="index.php?th=ligth">Ligth mode</a>
    <h3>Welcom To Ecoin </h3>
</body>
</html>
