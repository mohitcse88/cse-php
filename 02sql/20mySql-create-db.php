<?php

// Contecting to a Database 
$servername = "localhost";
$username = "root";
$password = "";

// Create Connection 
$conn = mysqli_connect($servername, $username , $password);


// Connection Check 
if(!$conn){
    die("Sorry We failed to connect to databse : ".mysqli_connect_error());
    echo "<br>";
}
else{
    echo "Connection was Successful";
    echo "<br>";
}

// Creating Database using PHP script 
$sql = "CREATE DATABASE dbMohit2";
$result =  mysqli_query($conn , $sql); // $conn or $sql is a arguments or parameters 

// Check for the databse creation success 
if($result){
    echo "The Database was created Successfully";
    echo "<br>";
}
else {
    echo "The Databse was not created Successfully because of this error ". mysqli_error($conn) ;
    echo "<br>";
}

echo "The result is ";
echo var_dump($result); // when above query will be failed then print false(0) or success then print true(1)
echo "<br>";





?>