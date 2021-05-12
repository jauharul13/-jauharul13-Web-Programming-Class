<?php
$word = $_POST["word"];

function Palindrome($word)
{
    $temp = $word;
    $new = 0;
    while (floor($temp)) {
        $d = $temp % 10;
        $new = $new * 10 + $d;
        $temp = $temp / 10;
    }
    if ($new == $word) {
        return 1;
    } else {
        return 0;
    }
}





//print the output
echo "Original Word             \t: " . "$word<br>";
echo "Reverse Word              \t: " . strrev($word) . "<br>";
echo "Total No of Characters    \t: " . strlen($word) . "<br>";
if (Palindrome($word)) {
    echo "Palindrome";
} else {
    echo "Not a Palindrome";
}


//echo "Status                    \t: " . status($word);
