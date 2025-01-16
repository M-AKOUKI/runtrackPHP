<?php

if(isset($_POST["username"]) && isset($_POST["password"])){
    $x = $_POST["username"];
    $y = $_POST["password"];
    var_dump($x,$y);
    if ($x == "John" and $y == "Rambo"){echo"C'est pas ma guerre";}
    else echo"votre pire cauchemar";

    }

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
            <form action="job5.php" method ="post">
                <input type="text" name="username">
                <input type="text" name="password">
                <input type="submit" name="submit" value="submit">
            </form>
        </header>
    </body>