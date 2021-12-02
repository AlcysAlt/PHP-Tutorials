<!DOCTYPE html>
<html>
<?php
function simple_multiplication(){
    for ($i = 1; $i < 11; $i++){
        for($a = 1; $a < 11; $a++){
            echo($i." x ".$a." = ".$i*$a."<br>");
        }
    }
}
function why(){
    $numbers = array(
        1,2,3,4,5,6,7,8,9,10
    );
    foreach($numbers as $number){
        $counter = 0;
        while ($counter < 5)
        for ($i = 1; $i < 11; $i++){
            echo($number." x ".$i." = ".$i*$number."<br>");
            $counter++;
        }
        
    }
}

why();
?>