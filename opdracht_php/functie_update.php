<?php 

// stap 1. verbinding maken met database 
$conn = mysqli_connect('localhost', 'root', '') 
or die('Kan geen verbinding maken.');

// stap 2. charset verbinding controleren
mysqli_set_charset($conn, 'utf8');

//stap 3. selecteer database 
mysqli_select_db($conn, 'opdrachtsql') 
or die ('database niet beschikbaar');

// stap 4. query maken
$id = intval ($_POST["id"]);
$foto = mysqli_real_escape_string($conn, $_POST["foto"]);
$naam = mysqli_real_escape_string($conn, $_POST["naam"]);
$smaak = mysqli_real_escape_string($conn, $_POST["smaak"]);
$prijs = mysqli_real_escape_string($conn, $_POST["prijs"]);
$artikelnummer = mysqli_real_escape_string($conn, $_POST["artikelnummer"]);

$query = "UPDATE ijs SET foto = '$foto', naam = '$naam', smaak = '$smaak', prijs = '$prijs', artikelnummer =  '$artikelnummer' WHERE id = $id";

// stap 5. query uitvoeren
mysqli_query($conn, $query) or die (mysqli_error($conn));

header('location: 1_ijs_overzicht.php');

?>
