<?php
// what is sessions ?
// used to manage information across difference pages
// if logged in sessions will be created 

// verify the user login info
session_start();
$_SESSION['username'] = "Harray";
$_SESSION['favCat'] = "books";
echo "We have saved  your sessions";

?>