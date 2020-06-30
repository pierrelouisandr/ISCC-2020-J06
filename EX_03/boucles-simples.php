<?php
function compter($maximus) {
    $compteur = 1;
    while ($compteur <= $maximus) {
        echo "<p> $compteur </p> <br>";
        $compteur = $compteur + 1; }

    echo "<br>";
}

function compter_for($maximus) {
    for ($compteur = 1; $compteur <= $maximus; $compteur = $compteur + 1)
    echo "$compteur";
 } 
 echo "<br>";
 
compter(10);
compter_for(10);
?>