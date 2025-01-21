<?php
session_start();


if (!isset($_SESSION["nbvisites"])) {
    $_SESSION["nbvisites"] = 1;
} else {
    $_SESSION["nbvisites"] += 1; 
}

if (isset($_POST["reset"])) {
    session_destroy();
}

var_dump($_SESSION["nbvisites"]);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session Counter</title>
</head>
<body>
    <header>
        <form action="job1.php" method="post">
            <input type="submit" name="reset" value="Reset">
        </form>
    </header>
</body>
</html>
