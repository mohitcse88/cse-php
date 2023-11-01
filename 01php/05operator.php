<?php
/* operator in php
Operators help to perform operation on the any operand
1. Arithematic Operator 
2. Assignment Operator 
3. Comparision Operator 
4. Logical Operator 
*/
$a = 45 ; 
$b = 8 ; 
// 1. Arithematic Operator 
echo "<h3>1. Arithematic Operator </h3>";
echo "For $a + $b, the result is ".  $a + $b ."<br>";
echo "For $a - $b, the result is ".  $a - $b ."<br>";
echo "For $a * $b, the result is ".  $a * $b ."<br>";
echo "For $a / $b, the result is ".  $a / $b ."<br>";
echo "For $a % $b, the result is ".  $a % $b ."<br>";
echo "For $a ** $b, the result is ".  $a ** $b ."<br>";

// 2. Assignment Operator 
echo "<h3>2. Assignment Operator </h3>";
$x = $a ;
echo "For x, the value is $x" ."<br>"; // 45 
$x += $b ; // $x = $x + $b ; 
echo "For x, the value is $x" ."<br>"; // 53
$x -= $b ;  // $x = $x - $b ;  
echo "For x, the value is $x" ."<br>";// 45 
$x *= $b ;  // $x = $x * $b ; 
echo "For x, the value is $x" ."<br>";// 360 
$x /= $b ;  // $x = $x / $b ; 
echo "For x, the value is $x" ."<br>";//45
$x %= $b ; // $x = $x % $b ; 
echo "For x, the value is $x" ."<br>";  // 5 
$x **= $b ;  // $x = $x ** $b ; 
echo "For x, the value is $x" ."<br>"; // // 5 

// 3. Comparision Operator 
echo "<h3> 3. Comparision Operator </h3>";
$x = 7 ; 
$y = 7 ; 
echo "For $x == $y, the result is ".  ($x == $y) ."<br>"; // we have to use comparision inside the baraces
echo "For $x == $y, the result is ";
echo var_dump($x == $y);
echo "<br>"; 

echo "For $x <> $y, the result is ";
echo var_dump($x <> $y);
echo "<br>"; 

echo "For $x > $y, the result is ";
echo var_dump($x > $y);
echo "<br>"; 

echo "For $x < $y, the result is ";
echo var_dump($x < $y);
echo "<br>"; 

// 4. Logical Operator 
echo "<h3> 4. Logical Operator </h3>";

$m = true ; 
$n = false ; 
echo "For m(true) and n(false) , the result is ";
echo var_dump($m and $n );
echo "<br>";
echo "For m(true) && n(false) , the result is ";
echo var_dump($m && $n );
echo "<br>";

echo "For m(true) or n(false) , the result is ";
echo var_dump($m or $n );
echo "<br>";
echo "For m(true) || n(false) , the result is ";
echo var_dump($m || $n );
echo "<br>";

echo "For !n(false) , the result is ";
echo var_dump(!$n );
echo "<br>";


?>