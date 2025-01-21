<?php
setcookie("nbvisites",1,time()+7);
if (!isset($_COOKIE["nbvisites"])) {
    $nbvisites = 1;

} else {
   $nbvisites = $_COOKIE["nbvisites"] + 1; 
}
setcookie("nbvisites",$nbvisites,time()+7);
echo $nbvisites;



if (isset($_POST["reset"])) {
    setcookie("nbvisites");
}

var_dump($nbvisites);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cookie counter</title>
</head>
<body>
    <header>
        <?php
        echo $nbvisites;
        ?>
        <form action="job2.php" method="post">
            <input type="submit" name="reset" value="Reset">
        </form>
    </header>
</body>
</html>
