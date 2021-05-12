<?php
/*DB_Account.php
used to connect to SQL
consist of 2 function, add() and search()
*/
$server = 'localhost';
$user = 'jauharulsurvey';
$pass = 'jauharul2021';
$database = 'survey';

/*
add book informations to DB
*/

//connect to SQL DB
$connect = mysqli_connect($server, $user, $pass) or die('cannot establish connection');
mysqli_select_db($connect, $database) or die('no database selected');
