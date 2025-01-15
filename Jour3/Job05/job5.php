<!DOCTYPE html>
<html>
<?php

$str ="On n est pas le meilleur quand on le croit mais quand on le sait";


$comptV = 0;
$comptC = 0;
for ($i=0;isset($str[$i]);$i++) {
    if ($str[$i] == "a" or $str[$i] == "e" or $str[$i] == "i" or $str[$i] == "o" or $str[$i] == "u" or $str[$i] == "y"or
    $str[$i] == "A" or $str[$i] == "E" or $str[$i] == "I" or $str[$i] == "O" or $str[$i] == "U" or $str[$i] == "Y") {$comptV += 1;}
    else $comptC += 1;

}
echo $comptV ."<br>". $comptC;
$dic = ["Consonnes" => "$comptC", "Voyelles" => "$comptV"];

?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BBC</title>
</head>
<body>
    <header>
        <thead>Voyelles</thead>
        <thead>Consonnes</thead>
        <br>
        <th><?php echo $dic["Voyelles"]?></th>
        <td><?php echo $dic["Consonnes"]?></td>
    </header>
</body>
</html>