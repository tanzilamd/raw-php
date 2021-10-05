<?php 
    $a = 12.4;
    $b = 200.11;
    $c = 3;

    if ($a > $b) {
        if ($a > $c) {
            echo "<h1>$a is big number</h1>";
        } else {
            echo "<h1>$c is big number</h1>";
        }
    } else {
        if ($b > $c) {
            echo "<h1>$b is big number</h1>";
        } else {
            echo "<h1>$c is big number</h1>";
        }
    }
?>