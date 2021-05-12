<?php 
    if(isset($_POST["submit"])){
        /*
        $Full_Name = $_POST["thename"]; 
	    $SID = $_POST["SID"];       
        $Adress = $_POST["Adress"];
	    $Major = $_POST["major"];
        $Email_Adress = $_POST["email"];
        $Phone_Number = $_POST["PhoneNumber"]; 
       */
        $Student = [
            'Full Name'=>$_POST["thename"], 
            'SID'=>$_POST["SID"], 
            'Adress'=>$_POST["Adress"], 
            'Major'=>$_POST["major"], 
            'Email_Adress'=>$_POST["email"], 
            'Phone_Number'=>$_POST["PhoneNumber"]];
        
            //print Name, Email and Phone Number
            echo "Full Name : ".$Student['Full Name']. 
                "<br>Email_Adress : ".$Student['Email_Adress']. 
                "<br>Phone_Number : ".$Student['Phone_Number']." <br>";
        
         }
    else{
?>
        
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Form</title>
        </head>
        <body>
            <form name="form" action="FormInOneFile.php"  method="POST" text-align: center;>
                <h1>Student Data's Form</h1>
                <br>
                Full Name <br><input type="text" name="thename"> <br><br>
                Email Adress <br><input type="text" name="email"><br><br>
                Student ID <br><input type="text" name="SID" ><br><br>
                Adress <br><input type="text" name="Adress"><br><br>
                Major <br> <input type= "text" name="major"> <br><br>
                Phone Number<br><input type="number" name="PhoneNumber"><br><br>

                <input type="submit" name="submit" value="Submit">
                <br>
            </form>
        </body>
        </html>
   <?php 
    }
   ?>

<?php  ?>
