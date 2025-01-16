<?php

    if(isset($_POST)){

        var_dump($_POST ) ;

        echo "<br>";

        foreach ($_POST as $key => $value) {
            echo $key . " : " . $value ;
        }
    }
    $x = 0;
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
            <form action="job4.php" method ="post">
                <input type="text" name="prenom">
                <input type="text" name="age">
                <input type="submit" name="submit" value="submit">
            </form>
        </header>
    </body>