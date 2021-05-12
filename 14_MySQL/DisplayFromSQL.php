<?php
//declare variable and assign username and pass for MySql
$user = "jauharul";
$pass = "1234567890";
$database = "joo";

//connect variable and used mysqli_connect function
$connect = mysqli_connect("localhost", $user, $pass);
$thedatabase = mysqli_select_db($connect, $database) or die("unable to select databses");

$data = mysqli_query($connect, "SELECT*FROM friends") or die(mysqli_error());

print "<table border cellpadding = 3>";
while ($info = mysqli_fetch_array($data)) {
    print "<tr>";
    print "<th> Name: </th><td>" . $info['name'] . "</td>";
    print "<th>Pet:</th><td>" . $info['pet'] . "</td></tr>";
}
print "</table>";
