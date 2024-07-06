<?php




$year=1604;
$leapyear = $year %400 == 0 ? tru:($year % 100 == 0 ? false: ( $year %4 ==0 ? true: false ));

if($leapyear) {
    echo"$year is a leapyear";
}
else {
    echo "$year is not a leapyear";
}