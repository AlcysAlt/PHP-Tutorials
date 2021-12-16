<!DOCTYPE html>
<html>

<?php
$forename = 'Mateusz';
$surname = 'Klocek';
$encrolment = '30021114';
if (strlen($forename) > 5){
    echo $forename." ".$surname;
}
else{
    echo $encrolment;
}

?>