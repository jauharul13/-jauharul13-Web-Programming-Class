<?php

$matric = $_GET["matric"];
$Q1 = $_GET["one"];
$Q2 = $_GET["two"];


/*DB_Account.php
*/
$server = 'localhost';
$user = 'jauharulsurvey';
$pass = 'jauharul2021';
$database = 'survey';

//connect to SQL DB
$connect = mysqli_connect($server, $user, $pass) or die('cannot establish connection');
mysqli_select_db($connect, $database) or die('no database selected');


$data = mysqli_query($connect, "SELECT*FROM jauharul_survey_data WHERE matric ='$matric'");
while ($info = mysqli_fetch_array($data)) {

    $temp = $info['matric'];
}

if ($matric == $temp) {
    echo "you filled already";
    mysqli_close($connect);
} else {
    insertdata();
}

function insertdata()
{

    global $matric, $Q2, $Q1, $result;
    /*DB_Account.php
*/
    $server = 'localhost';
    $user = 'jauharulsurvey';
    $pass = 'jauharul2021';
    $database = 'survey';

    //connect to SQL DB
    $connect = mysqli_connect($server, $user, $pass) or die('cannot establish connection');
    mysqli_select_db($connect, $database) or die('no database selected');
    //insert information from form into DB
    $query = "INSERT INTO jauharul_survey_data value('$matric', '1', '$Q1'), ('$matric', '2', '$Q2') ";
    $result = mysqli_query($connect, $query);
    print "Success Insert data";
    mysqli_close($connect);
}

?>
<h1>Thank you for participating in our survey</h1>

<p>so far,</p>
<ul>
    <li>{x} percent answer YES to question 1</li>
    <li>{x} percent answer YES to question 2</li>
</ul>

<?php

#counting Q1
function q1()
{
    global $temp;
    /*DB_Account.php
*/
    $server = 'localhost';
    $user = 'jauharulsurvey';
    $pass = 'jauharul2021';
    $database = 'survey';

    //connect to SQL DB
    $connect = mysqli_connect($server, $user, $pass) or die('cannot establish connection');
    mysqli_select_db($connect, $database) or die('no database selected');


    $data = mysqli_query($connect, "SELECT*FROM jauharul_survey_data WHERE matric ='1' AND answer ='Yes'");
    while ($info = mysqli_fetch_array($data)) {

        $temp = $info['matric'];
    }
}


function q2()
{
}
?>