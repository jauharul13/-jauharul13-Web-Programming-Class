<?php 
    if(isset($_POST["submit"])){
        $FullName =$_POST["thename"];
        $EmailAdress = $_POST["email"];
        $Cohort =$_POST["cohort"];
        $PhoneNumber =$_POST["phonenumber"];

        echo"Full Name: $FullName <br>Email Adress: $EmailAdress <br>Cohort : $Cohort <br>Phone Number : $PhoneNumber";
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
            <form name="form" action="FormInOneFile.php" method="POST">
                <h1>Web Programming Study Group Form</h1>
                <br>
                Full Name <br><input type="text" name="thename"> <br><br>
                Email Adress <br><input type="text" name="email"><br><br>
                Cohort <br><input type="number" name="cohort"><br><br>
                Phone Number<br><input type="number" name="phonenumber"><br><br>

                <input type="submit" name="submit" value="Submit">
                <br>
            </form>
        </body>
        </html>
   <?php 
    }
   ?>



