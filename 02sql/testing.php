<?php

// credention to enter in server
$servername = "localhost";
$username = "root";
$password = "";
$database = "lpu"; // Make sure the case matches the actual database name

// Connecting to the server
$conn = mysqli_connect($servername, $username, $password, $database);

// Connection Checking 
if($conn){
    echo "Connection was Successful";
    echo "<br>";
}
else {
    die("Connection was not Successful: " . mysqli_connect_error());
    echo "<br>";
}

?>
