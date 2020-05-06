<?php
    echo "<ul>";
    for ($i=1; $i<=5; $i++) {
        echo "<li>$i</li>";
        echo "<ul>";
        for ($j=1; $j<=5; $j++){

            echo "<li>$j</li>";
        }
        echo "</ul>";
    }
    echo "</ul>";
?>



