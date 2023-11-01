<?php
$a = 65 ; 
$b = 9 ; 
if($a > 78 ){
    echo "a is greater than 78";
}
else {
    echo "a is not greater than 78";
}
echo "<br>";

$age = 24 ; 
// if else ladder 
// if($age > 18){
//     echo "You can drink water with chai and alcohol";
// } 
// elseif($age > 13){
//     echo "You can drink chai only with water. No alcohol for you";
// }
// else {
//     echo "You can drink water only";
// }
// echo "<br>";

// if ladder
if($age > 18){
    echo "You can drink water with chai and alcohol";
} 
echo "<br>";

// if else ladder 
if($age > 13){
    echo "You can drink chai only with water. No alcohol for you";
}
else {
    echo "You can drink water only";
}
echo "<br>";


// Quick Quiz 
// 1. Create an if else ladder using more than one elseif
$_age = 12 ; 
if($_age>0 && $_age<13){
    echo"You are child";
}
elseif($_age>=13 && $_age<18){
    echo "You are a teanager";
}
elseif($_age>=18 && $_age<100){
    echo "You are adult";
}
elseif($_age>=100 && $_age<125){
    echo "You are a legend";
}
else {
    echo "You are not human";
}
echo "<br>";



// 2. Write a program to allow a driver only when his age is greater than or equal to 25 and less than or equal to 65 

$driverAge = 36 ; 
if($driverAge >= 25 && $driverAge<=65){
    echo "You can drive";
}
else{
    echo"You can't drive";
}

echo "<br>";
echo "Done";

?>
