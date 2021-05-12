<?php 
// define variables and set to empty values
//$FullNameErr = $EmailAdressErr = $CohortErr = $PhoneNumberErr = "";
//$FullName = $EmailAdress = $Cohort = $PhoneNumber = "";

$FullName =$_POST["thename"];
$EmailAdress = $_POST["email"];
$Cohort =$_POST["cohort"];
$PhoneNumber =$_POST["phonenumber"];

echo"Full Name: $FullName <br>Email Adress: $EmailAdress <br>Cohort : $Cohort <br>Phone Number : $PhoneNumber";
?>




