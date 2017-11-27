<?php 

// stap 1. verbinding maken met database server
$conn = mysqli_connect('localhost', 'root', '') 
or die('Kan geen verbinding maken.');

// stap 2. charset verbinding controleren
mysqli_set_charset($conn, 'utf8');

// stap 3. selecteer database
mysqli_select_db($conn, 'opdrachtsql') 
or die ('database niet beschikbaar');

// stap 4. query maken
$query = "SELECT id ,foto ,naam ,smaak ,prijs ,artikelnummer FROM ijs";

// stap 5. query uitvoeren
$result = mysqli_query($conn, $query) 
or die (mysqli_error($conn));
?>


<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Telefoonlijst</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
<link href="https://fonts.googleapis.com/css?family=Oswald:400,700" rel="stylesheet">
</head>

<body class="background1">

<h1>Overzicht</h1>

<p><a href="2_ijs_toevoegen.php" class="margin_a">Nieuw ijsje erbij? Klik hier</a></p>

<!-- check of er rows in de tabel zijn ingevoerd -->
<?php if (mysqli_num_rows($result) > 0): ?>

<table>
<tr>
	<th>id</th>
	<th>Afbeelding</th>
	<th>Naam</th>
	<th>Smaak</th>
  <th>Prijs</th>
	<th>Artikelnummer</th>
  		<th>edit</th>
      <th>delete</th>
</tr>
<?php while ($row = mysqli_fetch_assoc($result)): ?>
<tr>
	<td class= "c1"> <?php echo $row['id']; ?> </td>
	<td> <img src="<?php echo $row['foto']; ?>" 
       alt="" width="150" height="auto"> </td>
	<td> <?php echo $row['naam']; ?> </td>
  <td> <?php echo $row['smaak']; ?> </td>
  <td> <?php echo $row['prijs']; ?> </td>
	<td> <?php echo $row['artikelnummer']; ?> </td>
	<td> <a href="3_ijs_aanpassen.php?id=<?php echo $row['id']; ?>">edit</a> </td>
	<td> <a href="4_ijs_verwijderen.php?id=<?php echo $row['id']; ?>">delete</a> </td>
</tr>
<?php endwhile; ?>
</table>

<?php else: ?>
<p class="warning">Geen ijsjes gevonden...</p>
<?php endif; ?>


</body>
</html>