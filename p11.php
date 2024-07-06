<?php


/*$age =15;
$haslivence = false;
if ($age < 18 ) {
    echo"You are not eligible to Dirive";
}
elseif ($age > 18) {
    if( $haslivence ) {
        echo "You are eligible to Dirive";
    }
    else {
        echo "You are not eligible to Dirive";
    }
}   */


/* $age =19;
$haslivence = false;
if ($age < 18 && $haslivence == true ) {
    echo "You are eligible to Dirive";
}  
    else {
        echo "You are not eligible to Dirive";
    }       */


    $age =35;
    $haslicence = true;

echo $age >= 18 && $haslicence == true ?  "You are eligible to Dirive": "You are not eligible to Dirive";