<!DOCTYPE html>
<html>
<?php
function compute_table(){
    for ($i = 1; $i < 11; $i++){
        for($a = 1; $a < 11; $a++){
            echo($i." x ".$a." = ".$i*$a."<br>");
        }
    }
}
compute_table();
?>