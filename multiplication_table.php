<?php 
    for ($j=1; $j <= 100; $j++) { 
        echo "<div style='font-family:sans-serif;display:inline-block;font-size:20px;padding:5px;margin:5px; border:1px solid black; border-radius:5px;'>";
        for ($i=1; $i <= 10; $i++) { 
            $result = $i * $j;
            echo "$j X $i = $result";
            echo '<br>';
        }
        echo "</div>";
    }
?>