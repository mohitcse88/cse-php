<?php
echo "Welcome to world of cookies <br>";
/*
Cookies -> It is directly store in client browser. It is not sensitive data. 

Sessions -> It is carefully stored in Server. 
*/

// Syntax of set a cookies
// category , value , time , expire time  
// Read Php time manual on google 
setcookie("category","book", time() + 86400, "/");
echo "The cookies is set";
?>