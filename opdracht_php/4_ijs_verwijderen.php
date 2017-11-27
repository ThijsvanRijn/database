<?php

$id = $_GET['id'];

// stap 1. verbinding maken met database
$conn = mysqli_connect('localhost', 'root', '') 
or die('Kan geen verbinding maken.');

// stap 2. charset verbinding controleren
mysqli_set_charset($conn, 'utf8');

//stap 2. selecteer database 
mysqli_select_db($conn, 'opdrachtsql') 
or die ('database niet beschikbaar');

// stap 3. query opstellen
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

// stap 4. query uitvoeren
$result = mysqli_query($conn, $query) or die (mysqli_error($conn));
$medewerker = mysqli_fetch_assoc($result);
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

  <body class="background4">
    <form method="post" action="functie_delete.php" method="post" class="form">
      <ul>
        <h2>Verwijderen van product</h2>
        <p>
          <a>Weet je zeker dat je dit wilt verwijderen?</a>
        </p>
        <table>
    <?php foreach ($medewerker as $key => $value): ?>
      <tr>
        <th scope="row"><?=$key?></th>
        <td><?=$value?></td>
      </tr>
    <?php endforeach; ?>
  </table>
        <li>
          <input type="hidden" name="id" value="<?php echo $medewerker['id']?>">
          <input type="submit">
          <input type="button" name="cancel" value="Cancel" onClick="window.location='http://localhost/opdracht_php/1_ijs_overzicht.php';"
          />
        </li>
      </ul>
    </form>
  </body>

  </html>