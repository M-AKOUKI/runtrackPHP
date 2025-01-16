<?php
$x = 0;
foreach ($_GET as $key => $value) {
    $x++;
}
echo "Nombre d'arguments GET : " . $x;
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GETPOST</title>
</head>
<body>
    <header>
        <form action="job1.php" method ="get">
            <input type="text" name="prenom">
            <input type="text" name="age">
            <input type="submit" name="submit" value="submit">
        </form>
    </header>
</body>