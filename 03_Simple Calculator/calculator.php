<?php 

$num1 =$_POST['num1'];
$num2 = $_POST['num2'];
$operator = $_POST['operator'];
$result ="";

if ($operator === '+') {
    $result = $num1 + $num2;
  } 
elseif ( $operator === '-') {
    $result = $num1 - $num2;
  } 
elseif ($operator === '*'){
    $result = $num1 * $num2;
  } 
elseif($operator === '/'){
    $result = $num1 / $num2;
  } 
elseif($operator === '%'){
    $result = $num1 % $num2;
  }

print $result;
?>