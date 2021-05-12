<?php

$server = 'localhost';
$user = 'jauharul';
$pass = 'jauharul2021';
$database = 'jauharul_dictionary';

//connect to SQL DB
$connect = mysqli_connect($server, $user, $pass) or die('cannot establish connection');
mysqli_select_db($connect, $database) or die('no database selected');

$search = $_POST['word'];
/*
$to_english = $_POST['english'];
$ to_arab= $_POST['arabic'];
$ to_spanish= $_POST['spanish'];
*/

if ($_POST['english']) {
    $s = "English";
} elseif ($_POST['spanish']) {
    $s = "Spanish";
} elseif ($_POST['arabic']) {
    $s = "Arabic";
}


$data = mysqli_query($connect, "SELECT*FROM jauharul_worddata WHERE w_malay ='$search'");
print "The " . $s . " word of " . $search; ?> <br><br>

<?php
while ($info = mysqli_fetch_array($data)) {
    if ($_POST['english']) {
        print $info['w_english'];
    } elseif ($_POST['spanish']) {
        print $info['w_spanish'];
    } elseif (($_POST['arabic'])) {
        print $info['w_arabic'];
    }
}
?>
<br><br>
<p>Thank You for Using My Simple Dictionary</p>
<?php

mysqli_close($connect); ?>