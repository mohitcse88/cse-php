<?php
echo "Welcome to the world of for each loops <br><br>";
echo "for each loops use for iterate Array or Object <br><br>";

$arr = array("Bananas","Apples","Orange","Mango","Grapes" );
// for($i = 0 ; $i < count($arr) ; $i++){
//     echo $arr[$i];
//     echo "<br>";
// }

// Better way to do this - foreach loops
foreach ($arr as $key => $value) {// for object $key and $values 
}


// $arr values come inside $value one by one 
foreach ($arr as $value) { // for array only $values
    echo "$value <br>";
}
?>