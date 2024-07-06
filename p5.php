<?php


$name="John";
$marks=90;
$grade= '';


if ($marks >=90 ) {
    $grade= 'A';
}
elseif ($marks >= 80) {
    $grade= 'B';
}
elseif ($marks >= 70) {
    $grade= 'C';
}
elseif ($marks >= '60') {
    $grade= 'D';
}
elseif ($marks >= '50') {
    $grade= 'E';
}
else {
    $grade= 'F';
}
printf(" Students %s has scored %d marks and grade is %s ", $name, $marks, $grade);