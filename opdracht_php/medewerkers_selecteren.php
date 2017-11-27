<?php 

// stap 1. verbinding maken met database server
$conn = mysqli_connect('localhost', 'root', '') 
or die('Kan geen verbinding maken.');

// stap 2. charset verbinding controleren
mysqli_set_charset($conn, 'utf8');

//stap 3. selecteer database
mysqli_select_db($conn, 'opdrachtsql') 
or die ('database niet beschikbaar');

// stap 4. query maken
$query = "SELECT 
			  id
			 ,foto

		FROM
			ijs";
			
// stap 5. query uitvoeren
$result = mysqli_query($conn, $query) 
or die (mysqli_error($conn));

?>


<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Overzicht</title>
</head>

<body>

<h1>Overzicht</h1>

<!-- check of er rows in de tabel zijn ingevoerd -->
<?php if (mysqli_num_rows($result) > 0): ?>

<form method="get" action="1_ijs_overzicht.php">
<select name="id">
<?php while ($row = mysqli_fetch_assoc($result)): ?>
<option value="<?php echo $row['id']; ?>"><?php echo $row['foto']; ?></option>  
<?php endwhile; ?>
</select>
<input type="submit" value="verzenden">
<input type="cancel" value="cancel">
</form>

<?php else: ?>
<p class="warning">Geen medewerkers gevonden...</p>
<?php endif; ?>


</body>
</html>

