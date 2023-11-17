<?php
// Start the sessions and get the data
session_start();
if (isset($_SESSION['username'])) {
    
echo "Welcome ". $_SESSION['username'] . "<br>";
echo "Your Favorite Category is ". $_SESSION['favCat'] . "<br>";
}
else {
    echo "Please Login to continue ";
}
?> 