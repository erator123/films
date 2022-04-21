<?php
$pages = [
    "home" => "Super filmy",    
    "filmy" => "Naše produkty",
    "kontakty" => "Jak nás kontaktovat",
    "404" => "Ups 404"
];
$p = filter_input(INPUT_GET, 'p');
if (empty($p)) {
    $p = 'home';
}
if (!isset($pages[$p])) {
    $p = '404';
}
?>



<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="php/filmy.php">
    <link rel="stylesheet" href="php/kontakty.php">
    <title>kontakty</title>
</head>
<body>
<nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="filmy.php">films</a></li>
            <li><a href="kontakty.php">contacts</a></li>
        </ul>
    </nav>
    
    <h2>kontakty</h2>
<p>
    Tuto stránku vytvořili žáci Michal Danihelka a Daniel Dostál <br>
    kontaktovat nás však již není možno
</p>
</body>
</html>