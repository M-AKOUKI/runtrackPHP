<?php

$str = "Certaines choses changent, et d'autres ne changeront jamais";
$x = [];

for ($i=0; isset($str[$i]);$i++) {
    $x = $str[$i-1];
    echo $x;
}