<?php

    if(isset($_GET)){

        var_dump($_GET ) ;

        echo "<br>";

        foreach ($_GET as $key => $value) {
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
            <form action="job2.php" method ="get">
                <input type="text" name="prenom">
                <input type="text" name="age">
                <input type="submit" name="submit" value="submit">
            </form>
        </header>
    </body>