
<?php require "myfunction.php" ?>

<?php

$x = 5;
$y = 3;


$res = arithmetic($x, $y);
echo "The result of $x + $y is ";
print_r($res['sum']);
echo " and $x * $y is ";
print_r($res['mult']);



?> 