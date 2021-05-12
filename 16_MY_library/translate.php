<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Translate</title>
    <p>The word </p>
    <?php $input ?><br>
    <?php $output ?><br><br>

    <p>Thank you for Using Simple Dictionary</p>
</head>

<body>

</body>

</html>

<?php
function DB()
{
    $server = 'localhost';
    $user = 'jauharul';
    $pass = 'jauharul2021';
    $database = 'jauharul_dictionary';

    //connect to SQL DB
    $connect = mysqli_connect($server, $user, $pass) or die('cannot establish connection');
    mysqli_select_db($connect, $database) or die('no database selected');

    //search
}
