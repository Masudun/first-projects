<?php




$year=2023;
$leapyear=false;

if ($year % 400 == 0) {
    $leapyear = true;
}
elseif ($year  % 100 == 0) {
    $leapyear = true;
}
elseif ($year % 4== 0) {
    $leapyear = true;
}
else{
    $leapyear = false;
}
if($leapyear) {
    echo"$year is a leapyear";
}
else {
    echo "$year is not a leapyear";
}
