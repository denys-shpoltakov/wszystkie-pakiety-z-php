<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$imie = $_GET['imie'];

echo "Witaj, $imie";


$liczba = $_GET['liczba'];
$wynik = $liczba + 15;

echo "Pobrana liczba: $liczba <br>";
echo "Po dodaniu 15: $wynik";


session_start();

if(!isset($_SESSION['licznik'])){
    $_SESSION['licznik'] = 1;
}else{
    $_SESSION['licznik']++;
}

?>

<footer>
Strona odwiedzona <?php echo $_SESSION['licznik']; ?> razy.
</footer>
</body>
</html>