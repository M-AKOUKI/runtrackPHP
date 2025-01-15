<?php

$str = "Les choses que l'on Possède finissent par nous posséder.";

$x = [];
for($i=strlen($str) - 1;$i >=  0;$i--){
    $x = $str[$i] ;
    echo $x;

}
