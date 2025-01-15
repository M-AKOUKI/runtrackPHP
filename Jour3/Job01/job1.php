<?php 
$val = [200, 204, 173, 98, 171, 404, 459];

for($i=0;isset($val[$i]);$i++) {
    if ($val[$i]%2 == 0) {echo"$val[$i] est paire <br>";}
    else echo"$val[$i] est impaire <br>";
}