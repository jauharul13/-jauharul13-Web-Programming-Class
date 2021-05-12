<?php
/*DB_Account.php
used to connect to SQL
consist of 2 function, add() and search()
*/
$server = 'localhost';
$user = 'jauharul';
$pass = 'jauharul2021';
$database = 'jauharul_db';

/*
add book informations to DB
*/
function add()
{
    global $connect, $server, $user, $pass, $database;
    global $book_id, $title, $author, $publication_year;
    global $connect, $query, $data, $result;

    $book_id = $_POST['book_id'];
    $title = $_POST['title'];
    $author = $_POST['author'];
    $publication_year = $_POST['publication_year'];

    //connect to SQL DB
    $connect = mysqli_connect($server, $user, $pass) or die('cannot establish connection');
    mysqli_select_db($connect, $database) or die('no database selected');

    //insert information from form into DB
    $query = "INSERT INTO jauharul_book value('$book_id', '$title', '$author', '$publication_year')";
    $result = mysqli_query($connect, $query);

    if ($result) {
        echo "Success Added to Db!";
    } else {
        print "Fill All informations please!";
    }
    mysqli_close($connect);
}

/*
Search book informations from DB then print in table
*/
function search()
{
    global $connect, $server, $user, $pass, $database;
    global $connect, $data, $search, $info;
    $search = $_POST['searchbook'];
    //connect to SQL DB
    $connect = mysqli_connect($server, $user, $pass);
    mysqli_select_db($connect, $database) or die('no database selected');


    #$search = "jauharul";
    $data = mysqli_query($connect, "SELECT*FROM jauharul_book WHERE title ='$search' or author='$search'");
    print "Your Book";
    print "<table border cellpadding =2 cellspacing=0>";
    while ($info = mysqli_fetch_array($data)) {
        print "<tr>";
        print "<th> Book ID: </th><td>" . $info['book_id'] . "</td>";
        print "<th> Title:</th><td>" . $info['title'] . "</td>";
        print "<th> Author: </th><td>" . $info['author'] . "</td>";
        print "<th> Publication Year: </th><td>" . $info['publication_year'] . "</td></tr>";
    }
    print "</table>";
    mysqli_close($connect);
}

function user_validation($usernamee, $passwordd)
{
    global $connect, $server, $user, $pass, $database;
    global $connect, $data, $info, $usernamee, $passwordd;

    //connect to SQL DB
    $connect = mysqli_connect($server, $user, $pass);
    mysqli_select_db($connect, $database) or die('no database selected');

    #------------------------------------------------------------
    $usernamee = $_POST['username'];
    $passwordd = $_POST['password'];


    $data = mysqli_query($connect, "SELECT*FROM user WHERE username ='$usernamee' and password ='$passwordd'");
    $info = mysqli_fetch_array($data);
    if ($info['status'] == 'admin') {
        session_temp();
        header("location:menu.php");
    } elseif ($info['status'] == 'user') {
        session_temp();
        header("location:searchform.php");
    } else {
        header("location:Index.php?error=2");
    }

    mysqli_close($connect);
}

function session_temp()
{

    $usernamee = $_POST['username'];
    $passwordd = $_POST['password'];
    $_SESSION['username'] = $usernamee;
    $_SESSION['password'] = $passwordd;
}



























//$username = $_POST['username'];
//$password = $_POST['password'];

//temporary aja
//$username = $_POST['username'];
//$password = $_POST['password'];

/*check to validate username and pass login */
/*function user_validation()
{
    global $connect, $server, $user, $pass, $database;
    global $connect, $data, $info, $usernamee, $passwordd;

    //connect to SQL DB
    $connect = mysqli_connect($server, $user, $pass);
    mysqli_select_db($connect, $database) or die('no database selected');

    #------------------------------------------------------------
    #$usernamee = 'jauharul';
    #$passwordd = 'arifin';

    $usernamee = $_POST['username'];
    $passwordd = $_POST['password'];


    $data = mysqli_query($connect, "SELECT*FROM user WHERE username ='$usernamee' and password ='$passwordd'");
    $info = mysqli_fetch_array($data);
    if ($info['status' == 'admin']) {
        echo "hallo kakak admin";
    } else {
        echo "User biasa";
    }

    mysqli_close($connect);
}
