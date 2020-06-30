<?php
function compter_dizaine($maximus) {
    $number = 1;
    while ($number <= $maximus) {
        echo "<p> $number </p> <br>";

        if ($number %10 == 0 && $number %100 != 0) {
            echo "<p> Ceci est une dizaine </p> <br>";
        }

        if ($number %100 == 0) {
            echo "<p> Ceci est une centaine </p> <br>";
    }

    $number = $number + 1;
}
}
compter_dizaine(100);
?>