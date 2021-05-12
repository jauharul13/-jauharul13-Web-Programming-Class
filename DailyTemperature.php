<?php 
    $Temperature = [
        "Monday" => 40,
        "Tuesday" => 50,
        "Wednesday" => 35,
        "Thrusday" => 38,
        "Friday" => 40,
        "Saturday" => 20,
        "Sunday" => -10
    ];

    foreach ($Temperature as $day => $temp) {
        echo "Average Temperature on ".$day. " = " .$temp."<br>";
    }
?>

