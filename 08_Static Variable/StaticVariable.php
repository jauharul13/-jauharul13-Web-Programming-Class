<?php
function things()
{
    static $do = 1;
    echo "I have $do things to do today. <br>";
    $do++;
}
for ($i = 0; $i < 5; $i++) {
    things();
}
