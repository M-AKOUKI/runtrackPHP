<?php

$str ="On n est pas le meilleur quand on le croit mais quand on le sait";


$comptV = 0;
$comptC = 0;
for ($i=0;isset($str[$i]);$i++) {
    if ($str[$i] == "a" or $str[$i] == "e" or $str[$i] == "i" or $str[$i] == "o" or $str[$i] == "u" or $str[$i] == "y") {$comptV += 1;}
    else $comptC += 1;

}
echo $comptV ."<br>". $comptC;
$dic = ["Consonnes" => "$comptC", "Voyelles" => "$comptV"];

