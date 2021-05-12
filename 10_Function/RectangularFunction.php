<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Rectangular Function</title>
</head>

<body>
	<form action="RectangularFunction.php" method="POST" name="RecFunction">
		<h2>Rectangular Calculator </h2>
		<label for="length">Width :</label>
		<input type="double" name="width" placeholder="Input width here..."><br><br>
		<label for="height">Height</label>
		<input type="double" name="height" placeholder="Input height here..."><br><br>
		<input type="submit" name="submit" value="calculate"><br>
	</form>

	<?php
	if (isset($_POST['submit'])) {

		$width = $_POST['width'];
		$height = $_POST['height'];
		rectangularCal($width, $height);

		echo "<br>Area : $Area <br>";
		echo "Perimeter : $Perimeter";
	}
	?>
</body>

</html>

<?php
function rectangularCal($width, $height)
{
	global $Area, $Perimeter;
	$Area = ($width * $height);
	$Perimeter = 2 * ($width + $height);
}
?>