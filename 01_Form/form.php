<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Form</title>
</head>
<body>
	<form name="form" action="form.php" method="get">
		Name: <input type="text" name="thename"> <br> 
		<input type="radio" name="gender" value="M">Male
		<br>
		<input type="radio" name="gender" value="F">Female
		<br> <br>
		<input type="submit" value="send">
		<br>

	</form>

	<?php 
$name =$_GET["thename"];
$gender = $_GET["gender"];

echo"Name: $name <br>Gender: $gender"
?>
</body>
</html>




