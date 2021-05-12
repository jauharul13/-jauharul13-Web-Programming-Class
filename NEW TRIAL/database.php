<?php
/* database.php
Basic and secret DB info
*/
$server = 'localhost';
$user = 'jauharul';
$pass = 'jauharul2021';
$database = 'jauharul_db';

//connect to SQL DB
$connect = mysqli_connect($server, $user, $pass) or die('cannot establish connection');
mysqli_select_db($connect, $database) or die('no database selected');
