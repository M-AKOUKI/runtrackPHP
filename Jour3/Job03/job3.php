<?php

$str = "I'm sorry Dave I'm afraid I can't do that.";

for ($i=0;isset($str[$i]);$i++){
    if ($str[$i] == "a" or $str[$i] == "e" or $str[$i] == "i" or $str[$i] == "o" or $str[$i] == "u" or $str[$i] == "y") {echo $str[$i];}
}
