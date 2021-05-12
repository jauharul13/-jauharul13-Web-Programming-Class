<?php
function calculate($x1, $x2, $y1, $y2)
{
    $X1 = $_POST["x1"];
    $Y1 = $_POST["y1"];
    $X2 = $_POST["x2"];
    $Y2 = $_POST["y2"];

    /*
    //minus for each
    $left = $X2 - $X1;
    $right = $Y2 - $Y1;

    //pow each
    $powLeft = pow($left, 2);
    $powRight = pow($right, 2);

    //square

    $Result = sqrt($powLeft + $powRight);
    */
    $Result = sqrt((pow(($X2 - $X1), 2)) + (pow(($Y2 - $Y1), 2)));

    echo "Distance between ($X1,$Y1) and ($X2,$Y2) is $Result";
}

if (isset($_POST["submit"])) {
    $X1 = $_POST["x1"];
    $Y1 = $_POST["y1"];
    $X2 = $_POST["x2"];
    $Y2 = $_POST["y2"];
    calculate($X1, $X2, $Y1, $Y2);
} else { ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CALCULATE DISTANCE</title>

    </head>

    <body>
        <form action="CalculateDistance.php" name="form" method="POST">
            <h3>Distance between two points</h3>
            <P>Coordinate of the first point</P>

            <label for="x">X</label>
            <input type="number" name="x1">
            <label for="y">Y</label>
            <input type="number" name="y1">

            <P>Coordinate of the second point</P>
            <label for="x">X</label>
            <input type="number" name="x2">
            <label for="y">Y</label>
            <input type="number" name="y2">
            <br><br>
            <input type="submit" name="submit" value="Calculate">
        </form>
    </body>

    </html>

<?php  } ?>