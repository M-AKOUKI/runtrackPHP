<?php

function calcule($n1,$o,$n2) {
    if ($o == "-") {echo $n1 - $n2;}
    elseif($o == "+") {echo $n1 + $n2;}
    elseif($o == "*") {echo $n1 * $n2;}
    elseif($o == "/") {echo $n1 / $n2;}
    elseif($o == "%") {echo $n1 % $n2;}
    else echo"rentrer un operateur commun";
}

calcule(40,"+",12);
