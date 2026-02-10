<?php
$conn = new mysqli("localhost", "root", "", "klanten_db");

if ($conn->connect_error) {
    die("Database verbinding mislukt");
}
?>