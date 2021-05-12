<?php
//declare variable and assign username and pass for MySql
$user = "jauharul";
$pass = "1234567890";
$database = "joo";

//connect variable and used mysqli_connect function
$connect = mysqli_connect("localhost", $user, $pass);
$thedatabase = mysqli_select_db($connect, $database) or die("unable to select databses");

//$query = "CREATE TABLE friends(name VARCHAR(30), fav_color VARCHAR(30), fav_food VARCHAR(30), pet VARCHAR(30))";
//insert value to table friends
$query = "INSERT INTO friends value('jauharul', 'blue', 'Nasi goreng', 'rabbit'), ('arifin', 'red', 'Mie goreng', 'godzilla')";

mysqli_query($connect, $query);
mysqli_close($connect);
