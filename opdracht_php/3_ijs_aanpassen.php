<?php 

$id = $_GET['id'];
$conn = mysqli_connect('localhost', 'root', '') 
or die('Kan geen verbinding maken.');

mysqli_set_charset($conn, 'utf8');

mysqli_select_db($conn, 'opdrachtsql') 
or die ('database niet beschikbaar');

$query = "SELECT 
id
,foto
,naam
,smaak
,prijs
,artikelnummer
FROM
ijs 
WHERE id=" . intval($id) . ";";

$result = mysqli_query($conn, $query) or die (mysqli_error($conn));
$ijs = mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Oswald:400,700" rel="stylesheet">
  <title>Document</title>
</head>

<body class="background3">
  <div class="flex-container">
    <form method="post" action="functie_update.php" class="form">
      <ul>
        <h2>Product aanpassen</h2>
        <p>
          <a>Hier kan je een item aanpassen</a>
        </p>
        <li>
          <input type="hidden" name="id" value="<?php echo $ijs['id']?>">
          <label for=“foto”>Afbeelding:</label>
          <input id=“foto” name="foto" value="<?php echo $ijs['foto']?>" maxlength="100">
          <span>Afbeelding van het product</span>
        </li>
        <li>
          <label type=“text” for="naam">Naam:</label>
          <input id="naam" name="naam" value="<?php echo $ijs['naam']?>" maxlength="100">
          <span>Naam van het product</span>
        </li>
        <li>
          <label type=“text”>Smaak:</label>
          <input name="smaak" value="<?php echo $ijs['smaak']?>" maxlength="100">
          <span>Smaak van het product</span>
        </li>
        <li>
          <label type=“text”>Prijs:</label>
          <input name="prijs" value="<?php echo $ijs['prijs']?>" maxlength="100">
          <span>Prijs van het product</span>
        </li>
        <li>
          <label type=“text”>Artikelnummer:</label>
          <input name="artikelnummer" value="<?php echo $ijs['artikelnummer']?>" maxlength="100">
          <span>Prijs van het product</span>
        </li>
        <li>
          <input type="submit" value="Aanpassen">
        </li>
      </ul>
    </form>
  </div>
</body>

</html>