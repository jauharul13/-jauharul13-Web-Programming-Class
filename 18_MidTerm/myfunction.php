<?php
function arithmetic($x, $y)
{
    $sum = $x + $y;
    $mult = $x * $y;
    return compact('sum', 'mult');
}
