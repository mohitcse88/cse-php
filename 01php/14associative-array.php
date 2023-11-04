<?php
echo "Welcome to <strong> Numeric</strong> or  <strong>  Indexed </strong> array in php <br>"; // because key of this is Number or index
$arr = array("this","that","what"); // One Dimensional Array 
echo $arr[0] ."<br>";
echo $arr[1] ."<br>";
echo $arr[2] ."<br>";
// echo $arr[3] ."<br>";

// Associative Array
// Associate the keys with values 
echo "<br> Welcome to associative array in php <br>";
$favCol = array( // One Dimensional Array
    'shubham' => 'red',
    'rohan' => 'green',
    'mohit' => 'brown',
    'ronaldo'=>'blue',
    8=> 'this', // talk to teacher 
    8.2 => 'hey, how are you ?'
);
echo $favCol["shubham"] ."<br>";
echo $favCol["rohan"]."<br>";
echo $favCol["mohit"]."<br>";
echo $favCol['ronaldo']."<br>";
echo $favCol[8] ."<br>"; // talk to teacher 
echo $favCol[8.2]."<br>";

echo "<br>Print associative array by using <strong>foreach loop</strong>  <br>";

foreach ($favCol as $key => $value) { // foreach loop when then print whole array 
    echo "Favorite color of <strong> $key</strong> is <strong> $value </strong> <br>" ; 
}



?>