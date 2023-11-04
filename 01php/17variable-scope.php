<?php
// Local and Global Variable Scope in PHP
echo "Welcome to <strong>Scope and Local global variable </strong>in PHP <br>";

$a = 98 ; // Global Variable => It scope will be outside of the function 
$b = 99 ;
function printValue(){
    $a = 97 ; // Local Variable => It scope will be within the funcion 
    echo "The value of <strong> Local inside the funcion variable </strong> is $a <br>";
}

function globalValue(){
    global $a, $b ; // give me the access to this Global Variable
    $a = 100 ; 
    $b = 1000 ;  
    echo "The value of<strong> Global variable inside the funcion </strong> a is $a and b is $b <br>";   
}

echo "The value of  <strong>Global variable </strong> is ". $a ."<br>"; 
printValue();
globalValue();
echo "The value of<strong> Global variable Updated inside the function </strong> a is $a and b is $b <br>";   
echo "<br>";

echo var_dump($GLOBALS); // This is a Associative Array // All the Global Variables 
echo "<br>";
echo var_dump($GLOBALS["a"]);
echo "<br>";
echo var_dump($GLOBALS["b"]);
echo "<br>";
echo $GLOBALS["a"]    ;
echo "<br>";
echo $GLOBALS["b"]   ;

// global is called super globals 
// $GLOBAL is stored all global variables 
?>