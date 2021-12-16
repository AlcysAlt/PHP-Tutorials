<!DOCTYPE html>
<html>
<?php
$enrolment = '30021114';
$forename = 'Mateusz';
$surname = 'Klocek';
$array = array(
    0 => array(
        "Forename" => $forename,
        "Surename" => $surname,
        "Enrollment" => $enrolment,
    )
);
for ($i = 0; $i < count($array); $i++) {
    foreach( $array[$i] as $data){
        echo $data;
    }
}

?>