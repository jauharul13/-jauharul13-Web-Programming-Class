<?php
/*
login.php
Main code of the program. it is the login page.
use session
admin : user=>jauharul, pass=>arifin
normal user: user=>agung, pass=>ginanjar

*/
?>

<?php session_start();  ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Information</title>
</head>

<body>
    <!---This form goes to login.php
        validating username and pass.
        -->
    <form name="login" action="loginprocess.php" method="POST">
        <h1>Login Account</h1>
        <br>
        Username <br><input type="text" name="username"> <br><br>
        Password <br><input type="password" name="password"><br><br>

        <input type="submit" name="login" value="login">
        <br>

        <p>

            <?php
            //calling javascript popup as a checker if there is/are variable is emtty
            checker()
            ?>

        </p>
    </form>
</body>

</html>
<?php

/*
1 = username and pass is empty
2 = Invalid user(wrong)
3 = session already expired(logout)
*/
function checker()
{
    if (!empty($_GET['error'])) {
        if ($_GET['error']  == "1") {
            echo "Login and Password are empty!";
        } else if ($_GET['error'] == "2") {
            echo "Invalid user!";
        } else {
            echo "Session expired!";
        }
    }
}

//destroy the session
session_destroy();  ?>