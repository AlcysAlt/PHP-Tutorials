<!DOCTYPE html>
<html>

<?php
$personList = array(
    1 => array(
    "Title" => "Mr",
    "Forename" => "John",
    "Surename" => "Smith",
    "Age" => "22",
    "URL" => "https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.theguardian.com%2Flifeandstyle%2F2019%2Fnov%2F08%2Fexperience-hide-the-pain-harold-face-became-meme-turned-it-into-career&psig=AOvVaw2G1FTB9-YRkaUns9OsFDSs&ust=1638557111904000&source=images&cd=vfe&ved=0CAsQjRxqFwoTCNjU1objxfQCFQAAAAAdAAAAABAD"
    ),
    2 => array(
        "Title" => "Mrs",
        "Forename" => "Jane",
        "Surename" => "Smith",
        "Age" => "25",
        "URL" => "https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.theguardian.com%2Flifeandstyle%2F2019%2Fnov%2F08%2Fexperience-hide-the-pain-harold-face-became-meme-turned-it-into-career&psig=AOvVaw2G1FTB9-YRkaUns9OsFDSs&ust=1638557111904000&source=images&cd=vfe&ved=0CAsQjRxqFwoTCNjU1objxfQCFQAAAAAdAAAAABAD"
        )
);

print_r($personList[1]["URL"].'<br>'.$personList[2]["Forename"]);
?> 