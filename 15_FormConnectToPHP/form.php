
<?php include 'DB_Account.php';
//account informations retrieve from DB_Account.php
$name = $_POST['name'];
$city = $_POST['city'];
$phone = $_POST['phone'];
$birth = $_POST['birth'];

//connect to SQL DB
$connect = mysqli_connect($server, $user, $pass) or die('cannot establish connection');
mysqli_select_db($connect, $database) or die('no database selected');

//insert information from form into DB
$query = "INSERT INTO personal_information value('$name', '$phone', '$city', '$birth')";

if (mysqli_query($connect, $query)) {
    $data = mysqli_query($connect, "SELECT*FROM personal_information") or die(mysqli_error());
    print "Data has been inserted to the database<br>";

    // print all record in table
    print "<table border cellpadding = 3>";
    while ($info = mysqli_fetch_array($data)) {
        print "<tr>";
        print "<th> Name: </th><td>" . $info['name'] . "</td>";
        print "<th> City:</th><td>" . $info['city'] . "</td>";
        print "<th> Phone: </th><td>" . $info['phone'] . "</td>";
        print "<th> Birth: </th><td>" . $info['birth'] . "</td></tr>";
    }
    print "</table>";
} else
    print "No data was inserted<br>";


//close connection
mysqli_close($connect);
