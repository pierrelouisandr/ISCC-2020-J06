<?php

function clock(){
    $hour = 0 ; 
    while ($hour != 24) {
    
        for ( $minute =00; $minute <= 59; $minute += 1)
        { echo "<p>" . $hour . ":" . $minute . "</p><br>" ; }
        $hour += 1 ; 
    }
}

clock () ; 
?>