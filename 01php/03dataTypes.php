<?php
$name = "Mohit Kumar";
$income = "8000000";
/*
php data types 
1. String 
2. Integer 
3. Float 
4. Boolean 
5. Object 
6. Array 
7. Null 
*/

// String - sequences of character 
$name = "Harry"; 
$hobbies = "Swimming";
echo "He is a $name and his hobbies is $hobbies"; 
echo "<br>";

// Integer - Non decimal Number 
$income = 80000000 ; 
$assets = 80000000000000;
echo "My income is $income and my assets is $assets";
echo "<br>";

// Float - Decimal Point Number 
$income = 80000000.000 ; 
$assets = 80000000000000.000;
echo "My income is $income and my assets is $assets";
echo "<br>";

// Boolean - Boolean can be either true or false 
$yes = true ; 
$no = false ; 
echo $yes ; 
echo $no ;  // if we want to return false then we have to use if statement 
echo "<br>";

// Object - instances of classes 
// Employee is a class ---> Mohit can be one Object  

// Array - Used to store multiple values in a single variables 
$friends = array("subham","sivam","aditya","chotu");
echo var_dump($friends);
echo "<br>";
echo $friends[0];
echo "<br>";
echo $friends[1];
echo "<br>";
echo $friends[2];
echo "<br>";
echo $friends[3];
echo "<br>";
// echo $friends[4]; // will throw an error as the size of array is 4 


// NULL - if we want to reset the variabe then we set NULL 
$name = NULL ; 
echo $name ; 
echo var_dump($name);
?>


