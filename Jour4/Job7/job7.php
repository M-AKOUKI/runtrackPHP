<?php

if(isset($_GET["largeur"]) && isset($_GET["longueur"])){
    $x = (int) $_GET["largeur"];
    $y = (int) $_GET["longueur"];
    var_dump($x);
    echo str_repeat("/\ <br>", $y);
    echo str_repeat("|", $y);
    echo str_repeat("&nbsp", $x);
    echo str_repeat("|<br>", $y);
    /*for($i=0;$i<$y+1;$i++){
        echo"|";
    }*/
    

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
            <form action="job7.php" method ="get">
                <input type="text" name="largeur">
                <input type="text" name="longueur">
                <input type="submit" name="submit" value="submit">
            </form>
        </header>
    </body>