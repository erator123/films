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
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="php/DatabaseUtils.php">
    <link rel="stylesheet" href="php/kontakty.php">
    <title>filmy</title>
</head>
<body>
<nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="php/filmy.php">films</a></li>
            <li><a href="php/kontakty.php">contacts</a></li>
        </ul>
    </nav>


    <h1>movie</h1>

<p>
   <b>zde najdete nejslepší filmy všech dob</b> 
</p>

<script> 
    alert("Vítejte na naší webovce")
</script>
<?php
require_once "./utils/DatabaseUtils.php";

$connection = DatabaseUtils::connect("localhost", "root", "", "mydb");

$query = "SELECT `idmovies`,`name`,`studio`,`year`, `genre`, `country` FROM `mydb`.`movies`";
$users = DatabaseUtils::fetchData($connection, $query);

DatabaseUtils::closeConnection($connection);

?>

<p id="demo"></p>

<script>
const d = new Date();
document.getElementById("demo").innerHTML = d; /*tento kod vám ukáže kolik je aktuálně hodin*/
</script>


</body>
</html>
