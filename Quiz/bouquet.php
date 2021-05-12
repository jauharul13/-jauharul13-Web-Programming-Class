<?php
if (isset($_POST["submit"])) {
    $Name = $_POST["Name"];
    $Adress = $_POST["Adress"];
    echo "Thank $Name for ordering bouquet from us.<br>";

    if (!empty($_POST['checkbox'])) {
        // Counting number of checked checkboxes.
        $checked_count = count($_POST['checkbox']);
        echo "Your bouquet will consist of " . $checked_count . " types of flower<br/>";
    }
    foreach ($_POST['checkbox'] as $selected) {
        echo "<ul><li>$selected</li></ul>";
    }

    if ($checked_count == 2) {
        $total = 20;
    } else {
        $temp = $checked_count - 2;
        $total = ($temp * 7) + 20;
    }

    echo "<br>you will be charge $ $total for the bouquet<br>";
    echo "The bouwuet will be sent to $Adress";
} else { ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Bouquet</title>
    </head>

    <body>
        <form name="form" action="bouquet.php" method="POST">

            <h1>Bouquet Store</h1>
            <p><b>Please Order your Bouquet here.</b></p>

            Name :<input type="text" name="Name"> <br><br>
            Adress :<input type="text" name="Adress"><br><br>

            <p><i>Type of Flowers, please choose</i> </p>
            <input type="checkbox" name="checkbox[]" value="Red Rose">
            <label for="Flower1">Red Rose</label><br>

            <input type="checkbox" name="checkbox[]" value="White Rose">
            <label for="Flower2">White Rose</label><br>

            <input type="checkbox" name="checkbox[]" value="Jasmine">
            <label for="Flower3">Jasmine</label><br>

            <input type="checkbox" name="checkbox[]" value="Crysantreum">
            <label for="Flower4">Crysantreum</label><br>

            <input type="checkbox" name="checkbox[]" value="White Lily">
            <label for="Flower5">White Lily</label><br>

            <input type="submit" name="submit" value="Order">
            <br>

        </form>

    </body>

    </html>

<?php } ?>