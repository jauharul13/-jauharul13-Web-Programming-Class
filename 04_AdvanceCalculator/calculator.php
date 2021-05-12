<?php 
$currentValue = 0;
$input =[];
	if($_SERVER['REQUEST_METHOD' =="POST"]){
		if(isset($_POST['input'])){
			$input =json_decode($_POST['input']);
		}
		
		if(isset($_POST)){
			foreach($_POST as $key->$value){
				if(is_numeric($key)){
					$input [] = $key;
				}
			}
		}
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Advance Calculator</title>
</head>
<body>
<h3>Clone of Windows Calculator</h3>
	<div style="border: 1px solid #ccc; border-radius:3px; padding:5px; display:inline-block;">
		
		<form method="POST"  name="calAdv">
		<input type="hidden" name="input" value='<?php echo json_encode($input); ?>' id="">
			<p style="padding: 3px; margin:0">2+3</p>
			<input type="text" value="<?php echo $currentValue ?>">
			<table>
			<tr>
				<td><input type="submit" name="CE" value="CE" ></td>
				<td><input type="submit" name="C" value="C" ></td>
				<td><button type="submit" name="back" value="back" >&#8592 </button></td>
				<td><button type="submit" name="divide" value="/" >&#247</button></td>
			</tr>
			<tr>
				<td><input type="submit" name="7" value="7" ></td>
				<td><input type="submit" name="8" value="8" ></td>
				<td><input type="submit" name="9" value="9" ></td>
				<td><input type="submit" name="multiply" value="x" ></td>
			</tr>
			<tr>
				<td><input type="submit" name="4" value="4" ></td>
				<td><input type="submit" name="5" value="5" ></td>
				<td><input type="submit" name="6" value="6" ></td>
				<td><input type="submit" name="substract" value="-" ></td>
			</tr>
			<tr>
				<td><input type="submit" name="1" value="1" ></td>
				<td><input type="submit" name="2" value="2" ></td>
				<td><input type="submit" name="3" value="3" ></td>
				<td><input type="submit" name="add" value="+" ></td>
			</tr>
			<tr>
				<td><button type="submit" name="plusminus" value="plusminus" >&#177 </button></td>
				<td><input type="submit" name="0" value="0" ></td>
				<td><input type="submit" name="." value="." ></td>
				<td><input type="submit" name="equal" value="=" ></td>
			</tr>

			</table>
		</form>
	</div>
</body>
</html>