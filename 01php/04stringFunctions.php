<?php
$name = "Mohit Kumar is a good boy";
echo $name ; 
echo "<br>";
// by using dot (.) operator we can cancatenate the string
echo "The length of " . " my string is ". strlen($name);
echo "<br>";

echo str_word_count($name);
echo "<br>";

echo strrev($name);
echo "<br>";

echo strpos($name , "is"); // position of character in the form of index
echo "<br>";
echo strpos($name , "hello");

echo str_replace("Kumar" , "Maurya" , $name);
echo "<br>";

echo str_repeat($name , 4);
echo "<br>";

echo rtrim("<pre>     he is a good boy    </pre>");
echo "<br>";

echo "<pre>";
echo rtrim("     this is a good boy     "); // remove space from right side
echo "<br>";
echo ltrim("     this is a good boy     ");// remove space from left side
echo "</pre>";

echo "<br>";
echo "<br>";
?>