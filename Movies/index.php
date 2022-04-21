<?php
$pages = [
    "home" => "Super filmy",
    "filmy" => "Naše produkty",              //zde se snažíme vytvořit funkční url router, kde se snažíme zabránit tomu, aby nás někdo hacknul. V případě že uživatel zadá nesprávně údaje, tak ho to vyhodí buď na úvodní stránku, nebo mu to vypíše chybnou hlášku
                                             
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
    <meta name="description" content="website about films">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="film, films">
    <meta name="author" content="Michal Danihelka, Daniel Dostál">
    <title>Movies</title>
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="php/DatabaseUtils.php">
    <link rel="stylesheet" href="php/filmy.php">
    <link rel="stylesheet" href="php/kontakty.php">
</head>
<body>
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
           <li><a href="php/filmy.php">films</a></li>
            <li><a href="php/kontakty.php">contacts</a></li>
        </ul>
    </nav>
    <h1>Movies</h1>

    <p>
       <b>zde najdete nejlepší filmy všech dob</b> 
    </p>

    <script> 
        alert("Vítejte na naší webovce")  /* zde vás nepříjemně uvítá vítací hláška ještě před vstupem na web*/ 
    </script>
<?php
require_once "./utils/DatabaseUtils.php"; //zde se napojujeme na databázi, aby nám vyhodila data z databáze, tato část kodu požaduje další část kodu

$connection = DatabaseUtils::connect("localhost", "root", "", "mydb");// zde se připojíme na databázi

$query = "SELECT `idmovies`,`name`,`studio`,`year`, `genre`, `country` FROM `mydb`.`movies`"; // zde je sql kod 
$users = DatabaseUtils::fetchData($connection, $query);

DatabaseUtils::closeConnection($connection);



?>


</body>
</html>
