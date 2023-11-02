<?php
echo "Welcome to php tutorial in functions <br>";


// when run the program come on the function ignore it because here no calling the function 
// here only declaring the function 
// when function will be call then 
// function will be run 
// and destroy the all variable and function after running 
function processMarks($marksArr){
   $sum = 0 ; 
   foreach ($marksArr as $value) {
    $sum += $value ; 
   }
   return $sum ; 
}

function avgMarks($marksArr){
   $sum = 0 ; 
   $i = 1; 
   foreach ($marksArr as $value) {
    $sum += $value ; 
    $i++ ; // when increment the loop then $i will be increase by 1 
    // we can do this by using count function
   }
   return $sum/$i ; 
}
$chamanLal = [98,99,88,89,90,92];
$sumMarks = processMarks($chamanLal);
$avgMarks = avgMarks($chamanLal);

$Mohit = [100 , 98 , 99 , 94 , 96 , 100];
$sumMarksMohit = processMarks($Mohit);
$avgMarksMohit = avgMarks($Mohit);

echo "Total marks scored by Chaman  out of 600 is $sumMarks <br>"; 
echo "Total marks scored by Mohit out of 600 is $sumMarksMohit <br>"; 

echo "Total marks scored by Chaman  out of 600 is $avgMarks <br>"; 
echo "Total marks scored by Mohit out of 600 is $avgMarksMohit <br>"; 


?>