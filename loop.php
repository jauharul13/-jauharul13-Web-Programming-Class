<?php 
    
    for ($i=1; $i< 15; $i++) { 
        if ($i % 2 == 0 ) {   
            echo "$i ,";
            $sum += $i;
        }
    }
    echo "<br> Sum of 7 even number: $sum";
?>