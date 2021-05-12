<?php 
    function salam(){
        $a = "web programming student";
        print "<b>Assalamualaikum $a ...<br/>";
        print "How are you all today";
    }

    echo "below is the result without calling function:<br>";


    echo "<br>below is the result with calling function:<br>";
    salam();

?>

<?php  
    echo "<br><br><br><br>";

    function doubleValue(){
        global $temp;
        $temp =$temp *2;
    }

    $temp = 5;
    doubleValue();
    echo "\$temp is :$temp";
?>

<?php  
    echo "<br><br><br><br>";

    function doubleValue1($var){
        $returnVar = $var *2;
    
        return $returnVar;
    }

    $variable = 5;
    $temp1 = doubleValue1($variable);
    echo "\$temp is :$temp1";
?>

