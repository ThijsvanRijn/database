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

<body class="background2">
  <div class="flex-container">
    <form method="post" action="functie_toevoegen.php" class="form">
      <ul>
        <h2>Toevoegen van product</h2>
        <p>
          <a>Hier kan je een item toevoegen</a>
        </p>
        <li>
          <label for=“foto”>Afbeelding:</label>
          <input id=“foto” maxlength="100">
          <span>Afbeelding van het product</span>
        </li>
        <li>
          <label type=“text”>Naam:</label>
          <input name=“naam” maxlength="100">
          <span>Naam van het product</span>
        </li>
        <li>
          <label type=“text”>Smaak:</label>
          <input name=“smaak” maxlength="100">
          <span>Smaak van het product</span>
        </li>
        <li>
          <label type=“text”>Prijs:</label>
          <input name=“prijs” maxlength="100">
          <span>Prijs van het product</span>
        </li>
        <li>
          <label type=“text”>Artikelnummer:</label>
          <input name=“artikelnummer” maxlength="100">
          <span>Prijs van het product</span>
        </li>
        <li>
          <input type="submit" value="Toevoegen">
        </li>
      </ul>
    </form>
  </div>
</body>

</html>