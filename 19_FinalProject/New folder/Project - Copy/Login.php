<?php 
// library_login.php
// Showcases the login screen
session_start(); ?>

<html>
<head>
<title>Welcome to PendekInn</title>
</head>
<body>
<form method="post" action="library_validate.php">
<center>
<br>
<br>
<font face="arial" size="2" color="#000FFF">
<b>PendekInn: A URL Shortener Service</b>
<br>
<br><br>
<table width="180" cellspacing="1" cellpading="1" border="0">
<tr>
<td><font face="arial" size="2" color="#000FFD">Username</font></td>
<td><font face="arial" size="2" color="#000000">:</font></td>
<td><input type="text" name="user_login" size="15"></td>
</tr>
<tr>
<td><font face="arial" size="2" color="#000FFD">Password</font></td>
<td><font face="arial" size="2" color="#000000">:</font></td>
<td><input type="password" name="user_password" size="15"></td>
</tr>
<tr>
<td colspan="3">&nbsp;</td>
</tr>
<tr>
<td colspan="2">&nbsp;</td>
<td align="center"><input type="submit" value="Enter">&nbsp;&nbsp;
<input type="reset" value="Clear"></td>
</tr>
</table>
<br>
<br>
<font color="red">

<?php

if(!empty($_GET['error']))
{
	if($_GET['error'] == "1") // If both fields are empty, give out this error.
	{
		echo "Both fields are empty!";
	}
	else if($_GET['error'] == "2")  // If it doesn't match with the records in authorization_users table, give this error.
	{
		echo "Username / password doesn't exist!";
	}
	else // When session has expired, give out this error.
	{
		echo "Session has expired!";
	}
}
?>
</font>
</font>
</center>	
</form>
</body>
</html>
<?php session_destroy(); ?>