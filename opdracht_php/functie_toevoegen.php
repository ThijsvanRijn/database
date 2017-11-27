<?php

// stap 1. verbinding maken met database server
$conn = mysqli_connect('localhost', 'root', '') 
or die('Kan geen verbinding maken.');

// stap 2. charset verbinding controleren
mysqli_set_charset($conn, 'utf8');

//stap 3. selecteer database waar we mee willen werken
mysqli_select_db($conn, 'opdrachtsql') 
or die ('database niet beschikbaar');

// stap 4. query opstellen
$foto = mysqli_real_escape_string($conn, $_POST["foto"]);
$naam = mysqli_real_escape_string($conn, $_POST["naam"]);
$smaak = mysqli_real_escape_string($conn, $_POST["smaak"]);
$prijs = mysqli_real_escape_string($conn, $_POST["prijs"]);
$artikelnummer = mysqli_real_escape_string($conn, $_POST["artikelnummer"]);


$query = "INSERT INTO ijs
            (foto, naam, smaak, prijs, artikelnummer )
            VALUES
            ('" . $foto . "', '" . $naam . "', '" . $smaak . "', '" . $prijs . "', '" . $artikelnummer . "');";
            
            
// stap 4. query uitvoeren
mysqli_query($conn, $query) or die (mysqli_error($conn));

header('location: 1_ijs_overzicht.php');

?>