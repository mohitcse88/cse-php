<?php

// credention to enter in server
$servername = "localhost";
$username = "root";
$password = "";
$database = "lpu";

// In windows database name is case insensitive

// Connecting to the server
$conn = mysqli_connect($servername, $username, $password, $database);

// Connection Checking 
if($conn){
    echo "Connection was Successfull";
    echo "<br>";
}
else {
    die("Connection was not Successfull ". mysqli_connect_error());
    echo "<br>";
}


// Create a table in Database 
$sql = "CREATE TABLE `mytrip` (`sno` INT(6) NOT NULL AUTO_INCREMENT , `name` VARCHAR(12) NOT NULL , `dest` VARCHAR(6) NOT NULL , PRIMARY KEY (`sno`)) ";
$result = mysqli_query($conn, $sql);



// Check for the table creation success 
if($result){
  echo "The Table was created in Databse successfully <br>";
}
else{
    echo "The Table was not created in Database<br>";
}
?>

