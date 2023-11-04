<?php
echo "Welcome to <strong> Multi Dimensional Array </strong> in php <br>";
// Multi Dimensional Array mean One or More than one array inside the array 
// Multi Dimensional Array used for store data in Tabular Form 
// Example Student Marks
// Search Matrix for better understanding 

// Creating a two Dimensional Array 
$multiDimensional = array (
    array(2,5,7,8),
    array(1,2,3,1),
    array(4,5,0,1)
);

echo var_dump($multiDimensional) ."<br>";
echo var_dump($multiDimensional[0]) ."<br>" ;
// When we printing the value of Two Dimensional Array then we have to use Two Indeces 
echo $multiDimensional[2][3] ;
echo "<br>";

// Printint the content of the Two Dimensional Array
for ($i=0; $i < count($multiDimensional) ; $i++) { 
   echo var_dump($multiDimensional[$i]); // $multiDimensional[$i] it is a single array 
   echo"<br>";
}
echo "<br>";

for ($i=0; $i < count($multiDimensional) ; $i++) { 
    for ($j=0; $j <count($multiDimensional[$i]) ; $j++) {  // $multiDimensional[$i] it will be count first or 0 Array indeces
        echo $multiDimensional[$i][$j];
        echo " ";
    }
    echo "<br>";
}
echo "<br>";


?>