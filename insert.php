<?php
include 'db.php';

$naam = $_POST['naam'];
$adres = $_POST['adres'];
$woonplaats = $_POST['woonplaats'];
$telefoon = $_POST['telefoon'];
$email = $_POST['email'];

$conn->query("INSERT INTO klanten (naam, adres, woonplaats, telefoon, email)
VALUES ('$naam', '$adres', '$woonplaats', '$telefoon', '$email')");

header("Location: index.php");
?>
