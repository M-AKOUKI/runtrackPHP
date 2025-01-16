<?php

if(isset($_GET["nombre"])){
    $x = $_GET["nombre"];
    var_dump($x);
    if ($x%2 == 0){echo"$x est paire";}
    else echo"$x est impair";

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
            <form action="job6.php" method ="get">
                <input type="text" name="nombre">
                <input type="submit" name="submit" value="submit">
            </form>
        </header>
    </body>