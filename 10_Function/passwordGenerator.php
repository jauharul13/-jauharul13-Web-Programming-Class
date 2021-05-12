<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Random Password Generator</title>
</head>

<body>
    <section>
        <form name="form" method="POST" action="passwordGenerator.php">
            <h2>Random Password Generator</h2>
            <input type="submit" name="submit" value="submit">
        </form>
    </section>

    <section class="result" id="result">
        <?php
        if (isset($_POST["submit"])) {
            randomPasswordGenerator(6);
        } ?>
    </section>
</body>

</html>

<?php
function randomPasswordGenerator($L)
{

    $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890~`!@#$%^&*()_-+={[}]|\:;"<,>.?/';
    $pass = array();
    $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache

    for ($i = 0; $i < $L; $i++) {
        $n = rand(1, $alphaLength);
        $pass[] = $alphabet[$n];
    }
    //print & make the array into a string with implode func
    $myPass =  print("Random Password Here : <br>" . implode($pass));
    return $myPass;
}
?>

<style>
    section {
        text-align: center;
    }
</style>