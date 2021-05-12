<?php

//string of names with value
$names1 = "Adam, Ibrahim, Faisal, Burhan, Yusuf, Ali, Sarifah, Zainab";
echo "Names <br>$names1 <br><br>";

//create & print array from string with explode() function
$names1 = explode(" ", $names1);
echo "create & print array from string with explode() function<br>";

print_r($names1);
echo "<br><br>";

//sort array
sort($names1);
echo "sort array<br>";
print_r($names1);
echo "<br><br>";

//reverse array
rsort($names1);
echo "reverse array<br>";
print_r($names1);
echo "<br><br>";

//Remove the first element from the array.
array_shift($names1);
echo "Remove the first element from the array<br>";
print_r($names1);
echo "<br><br>";

//Add “Sultan” and “Mariam” to the end of the array.
array_push($names1, "Sultan", "Mariam");
echo "Add “Sultan” and “Mariam” to the end of the array<br>";
print_r($names1);
echo "<br><br>";

//Replace “Ali” with “Ismail”.
$a1 = ["Ismail"];
array_splice($names1, 5, 1, $a1);
echo "Replace “Ali” with “Ismail”.<br>";
print_r($names1);
echo "<br><br>";

//Add Taufiq to beginning of array
array_unshift($names1, "Taufiq");
echo "Add Taufiq to beginning of array<br>";
print_r($names1);
echo "<br><br>";

//create another array
echo "create another array<br>";
$names2 = ["Jauharul", "Arifin", "Agoeng", "Gianjar", "Akbar"];
print_r($names2);
echo "<br><br>";

//merged Array $names1 & $names2
echo "merged Array \$names1 & \$names2 <br>";
print_r(array_merge($names1, $names2));
