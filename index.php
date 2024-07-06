<?php

/*$data= date('H');
if ( $data > 20){
    echo'Assalamualaikum'. $data;

}
else{
    echo'Have a nice Journey';
}   */

$firstName="john";
$lastName= "Done";
$email= "hasan@gmail.com";
$age="23";

//printf ("  His name is =  %s %s %s %s  ", $age, $firstName, $lastName, $email );

$output=sprintf ("  His name is =  %s %s %s %s  ", $age, $firstName, $lastName, $email );
echo $output;



