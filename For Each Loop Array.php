<!DOCTYPE html>
<html>
<?php
$enrolment = '30021114';
$forename = 'Mateusz';
$surname = 'Klocek';
$array = array(
    1 => array(
        "Forename" => $forename,
        "Surename" => $surname,
        "Enrollment" => $enrolment,
    )
);
foreach($array as $key => $data) {
    foreach($data as $value) {
        echo $value;
    }
    
}
?>