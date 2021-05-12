<?php
$uploadDir = "";
$name = $_POST['fullname'];
$email = $_POST['email'];


$save_string = "$name\t $email\n";

$filename = "information.txt";
$fileHandle = fopen($filename, "a+");

//condition to stored string data
if (fwrite($fileHandle, $save_string, strlen($save_string))) {

    //identify uploaded file from server temp folder
    $file = $_FILES['userfile']['tmp_name'];

    //identift directory path where the file should be placed
    $destionation = $uploadDir . $_FILES['userfile']['name'];

    //move uploaded files from server temp folder to dedicated folder or directory
    if (is_uploaded_file($file)) {
        if (move_uploaded_file($file, $destionation)) {

            echo "<b>File is successfuly uploaded.<b><br>";
            echo "uploaded by :" . $name . "<br><br>";

            //file informations
            echo "Name : " . $_FILES['userfile']['name'] . "<br>";
            echo "Type : " . $_FILES['userfile']['type'] . "<br>";
            echo "Size : " . $_FILES['userfile']['size'] . "<br>";
            echo "Error : " . $_FILES['userfile']['error'] . "<br>";
        } else {
            echo "file is unsuccessfully uploaded!";
        }
    } else {
        echo "no files uploaded throught HTML form !";
    }
}

$fileHandle = fopen($filename, "r");
$filename = "information.txt";
$contents = fread($fileHandle, filesize($filename));

fclose($fileHandle);
