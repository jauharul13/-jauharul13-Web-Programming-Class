<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<!--
	<?php 
		$a = 3.14159; //double
		$b = 12; //integer
		$a_cast =(int)$a;
		$b_cast =(double)$b;
		echo "a_cast: $a_cast<br>";
		echo"b_cast: $b_cast<br><br><br>";
	 ?> 

	 <?php 
	 $num = 12.54;
	 $num2 = (int)$num;
	 echo "$num2<br><br><br>";
	  ?> 
	 

	  <?php 
	  	$num1 = 12;
	  	$num2 = (double)$num1;
	  	echo "$num2<br><br><br>";
	   ?>  

	   <?php 
	   $string1 = '23 45';
	   $string2 = 'ahmad';
	   $num1 = (double)$string1;
	   $num2 = (double)$string2 ?>

		<?php 
	   $num1 = 70;
	   $string1 = (string) $num1;
	   echo"$string1 <br><br>";
	    ?>
	
	<?php 
	$num1 = 23.45;
	$string1 = (string)$num1;
	echo"$string1<br><br>"
	?> -->

	<?php 
	$num1 = 123;
	$num2 =(array)$num1;
	echo"$num2[0]";
	?>
	
	<?php 
	$string1= 'ahmad';
	$string2= (array)$string1;
	echo"$string2[0]<br><br>" ?>

	<?php 
	$num1 =12.35;
	$num2 = (array)$num1;
	echo"$num2[0]<br><br><br><br>"
	?>

	<?php 
	$string="45 student";
	$number =(int)$string;
	echo"The number of students in this class is ", $number,"<br>";
	echo"*******************<br>";

	$book = 8;
	$record = (string)$book;
	$total = $record + 3.5;
	print"the total is $total<br>";
	echo"========================<br>";
	$sum = $string + $record;
	print"the sum is $sum<br><br><br><br>";
	echo"========================<br>";
	?>

	<?php 
	$a=5000;
	$b="I have $a";
	$c='I get $a';

	$d=(float)pow($a,2);

	print $a."<br>";
	print $b."<br>";
	print $c."<br>";
	print $d."<br>";
	?>
		
	<?php 
	$strname ='amount';
	$$strname =5;
	echo $amount,"<br><br>";
	?>
	
	<?php  
	define("MAXSIZE", 100);
	echo MAXSIZE;
	echo constant(MAXSIZE);
	?>
</body>
</html>