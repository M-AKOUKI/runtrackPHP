<?php

function leetspeak($str) {
    for($i=0;isset($str[$i]);$i++){
        if ($str[$i] == "A") {echo "4";}
        elseif ($str[$i] == "B") {echo "8";}
        elseif ($str[$i] == "C") {echo "(";}
        elseif ($str[$i] == "D") {echo "|)";}
        elseif ($str[$i] == "E") {echo "3";}
        elseif ($str[$i] == "F") {echo "|=";}
        elseif ($str[$i] == "G") {echo "6";}
        elseif ($str[$i] == "H") {echo "#";}
        elseif ($str[$i] == "I") {echo "1";}
        elseif ($str[$i] == "J") {echo "_|";}
        elseif ($str[$i] == "K") {echo "|<";}
        elseif ($str[$i] == "L") {echo "|";}
        elseif ($str[$i] == "M") {echo "^^";}
        elseif ($str[$i] == "N") {echo "//";}
        elseif ($str[$i] == "O") {echo "0";}
        elseif ($str[$i] == "P") {echo "|°*";}
        elseif ($str[$i] == "Q") {echo "(,)";}
        elseif ($str[$i] == "R") {echo "|2";}
        elseif ($str[$i] == "S") {echo "5";}
        elseif ($str[$i] == "T") {echo "+";}
        elseif ($str[$i] == "U") {echo "|_|";}
        elseif ($str[$i] == "V") {echo "/";}
        elseif ($str[$i] == "W") {echo "^/";}
        elseif ($str[$i] == "X") {echo "><";}
        elseif ($str[$i] == "Y") {echo "`/";}
        elseif ($str[$i] == "Z") {echo "2";}
        elseif ($str[$i] == "a") {echo "4";}
        elseif ($str[$i] == "b") {echo "8";}
        elseif ($str[$i] == "c") {echo "(";}
        elseif ($str[$i] == "d") {echo "|)";}
        elseif ($str[$i] == "e") {echo "3";}
        elseif ($str[$i] == "f") {echo "|=";}
        elseif ($str[$i] == "g") {echo "6";}
        elseif ($str[$i] == "h") {echo "#";}
        elseif ($str[$i] == "i") {echo "1";}
        elseif ($str[$i] == "j") {echo "_|";}
        elseif ($str[$i] == "k") {echo "|<";}
        elseif ($str[$i] == "l") {echo "|";}
        elseif ($str[$i] == "m") {echo "^^";}
        elseif ($str[$i] == "n") {echo "//";}
        elseif ($str[$i] == "o") {echo "0";}
        elseif ($str[$i] == "p") {echo "|°*";}
        elseif ($str[$i] == "q") {echo "(,)";}
        elseif ($str[$i] == "r") {echo "|2";}
        elseif ($str[$i] == "s") {echo "5";}
        elseif ($str[$i] == "t") {echo "+";}
        elseif ($str[$i] == "u") {echo "|_|";}
        elseif ($str[$i] == "v") {echo "/";}
        elseif ($str[$i] == "w") {echo "^/";}
        elseif ($str[$i] == "x") {echo "><";}
        elseif ($str[$i] == "y") {echo "`/";}
        elseif ($str[$i] == "z") {echo "2";}
        else echo $str[$i];
    
    }
}

echo leetspeak("je vais manger");