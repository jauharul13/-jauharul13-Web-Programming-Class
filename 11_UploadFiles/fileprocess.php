<?php
$uploadDir = "";
$name = $_POST['fullname'];
$matric = $_POST['matricno'];

//identify uploaded file from server temp folder
$file = $_FILES['userfile']['tmp_name'];

//identift directory path where the file should be placed
$destionation = $uploadDir . $_FILES['userfile']['name'];

//move uploaded files from server temp folder to dedicated folder or directory
if (is_uploaded_file($file)) {
    if (move_uploaded_file($file, $destionation)) {
        echo "file : " . $_FILES['userfile']['name'] . "<br>";
        echo "File is successfuly uploaded." . "<br>";
        echo "uploaded by :" . $name . "(" . $matric . ")";

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
