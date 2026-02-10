<?php
include 'db.php';

$id = $_POST['id'];
$naam = $_POST['naam'];
$adres = $_POST['adres'];
$woonplaats = $_POST['woonplaats'];
$telefoon = $_POST['telefoon'];
$email = $_POST['email'];

$conn->query("UPDATE klanten SET
    naam='$naam',
    adres='$adres',
    woonplaats='$woonplaats',
    telefoon='$telefoon',
    email='$email'
    WHERE id=$id");

header("Location: index.php");
?>
