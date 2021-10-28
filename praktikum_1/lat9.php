<?php 
    $randomNumber = array(12, 45, 120, 68, 1100, 350);
    sort($randomNumber);

    $randomNumberLength = count($randomNumber);
    for($x = 0; $x < $randomNumberLength; $x++) {
        echo $randomNumber[$x];
        echo "<br>";
    }
?>

