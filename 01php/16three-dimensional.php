<?php
echo "Welcome to Three Dimensional Array <br> ";
$threeDimensional = array(
    array(
        array(1,2,3,4),
        array(5,6,7,8)
    ),
    array(
        array(10,20,30,40),
        array(50,60,70,80)
    ),
    array(
        array(100,200,300,400),
        array(500,600,700,800)
    )
    );

    echo var_dump($threeDimensional) ."<br>" ; 
    for ($i=0; $i <count($threeDimensional) ; $i++) { 
        echo var_dump($threeDimensional[$i]) ."<br>" ; 
    }
    echo "<br><br>";

    // for ($i=0; $i < count($threeDimensional) ; $i++) {
    //     echo "This is a ". $threeDimensional[$i]." index  <br>"; 
    //     for ($j=0; $j <count($threeDimensional[$i]) ; $j++) { 
    //          echo "This is a $threeDimensional[$i][$j] index  <br>";
    //         for ($k=0; $k <count($threeDimensional[$i][$j]) ; $k++) { 
    //             echo "This is a $threeDimensional[$i][$j][$k] index  <br>";
    //             echo $threeDimensional[$i][$j][$k];
    //         }
    //     }
    // }

    
    for ($i=0; $i < count($threeDimensional) ; $i++) {
   
        for ($j=0; $j <count($threeDimensional[$i]) ; $j++) { 
             
            for ($k=0; $k <count($threeDimensional[$i][$j]) ; $k++) { 
                
                echo $threeDimensional[$i][$j][$k];
                echo " ";
            }
            echo "<br>";
        }
        echo "<br>";
    }   

?>