<?php

for($i = 0; $i<101; $i++) {
    if ($i < 21) {echo"<I>$i</I><br />";}
    elseif ($i == 42) {echo"La Plateforme_<br />";}
    elseif (25<$i && $i<51) {echo"<u>$i</u><br />";}
    else {echo "$i<br />";}
}

?>