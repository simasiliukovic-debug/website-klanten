<?php
include 'db.php';
$result = $conn->query("SELECT * FROM klanten");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Klanten</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1>Klantenoverzicht</h1>
<a href="toevoegen.php">➕ Klant toevoegen</a>

<table>
    <tr>
        <th>Naam</th>
        <th>Adres</th>
        <th>Woonplaats</th>
        <th>Telefoon</th>
        <th>Email</th>
        <th>Acties</th>
    </tr>

    <?php while ($row = $result->fetch_assoc()) { ?>
        <tr>
            <td><?= $row['name'] ?></td>
            <td><?= $row['adres'] ?></td>
            <td><?= $row['woonplaats'] ?></td>
            <td><?= $row['telefoon'] ?></td>
            <td><?= $row['email'] ?></td>
            <td>
                <a href="edit.php?id=<?= $row['id'] ?>">Edit</a>
                <a href="delete.php?id=<?= $row['id'] ?>" onclick="return confirm('Are you sure you want to delete it?')">Delete️</a>
            </td>
        </tr>
    <?php } ?>

</table>

</body>
</html>