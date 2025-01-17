<?php

function occurence($str,$char){
    $x = 0;
    for($i=0;isset($str[$i]);$i++){
        if ($str[$i] == $char) {$x += 1;}

    }
    echo"$char est present $x fois";
}

occurence("Bonjour","j");