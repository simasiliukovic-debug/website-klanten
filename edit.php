<?php
include 'db.php';
$id = $_GET['id'];
$result = $conn->query("SELECT * FROM klanten WHERE id=$id");
$klant = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Klant wijzigen</title>
</head>
<body>

<h1>Klant wijzigen</h1>

<form method="post" action="update.php">
    <input type="hidden" name="id" value="<?= $klant['id'] ?>">
    Naam: <input type="text" name="naam" value="<?= $klant['naam'] ?>"><br>
    Adres: <input type="text" name="adres" value="<?= $klant['adres'] ?>"><br>
    Woonplaats: <input type="text" name="woonplaats" value="<?= $klant['woonplaats'] ?>"><br>
    Telefoon: <input type="text" name="telefoon" value="<?= $klant['telefoon'] ?>"><br>
    Email: <input type="email" name="email" value="<?= $klant['email'] ?>"><br><br>
    <input type="submit" value="Opslaan">
</form>

<a href="index.php">Terug</a>

</body>
</html>
