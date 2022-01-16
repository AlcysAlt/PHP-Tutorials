<!DOCTYPE html>
<html>
<?php
$date = date('N');
switch ($date){
    case 1:
        echo 'Start of Work Week';
        break;
    case ($date == 2 || $date == 3 || $date == 4):
        echo 'Midweek';
        break;
    case 5:
        echo 'End of Work Week';
        break;
    default:
    echo 'Weekend';
    break;
}
?>
</html>