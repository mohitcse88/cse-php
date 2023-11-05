<?php
echo "Welcome to the stage where we are ready to get connected to a database<br>";
/* 
Ways to connect to a MySql Database 
1. MySQLi Extension 
   first use MySQL then i will be added
   i stands for improved 
   we can use MySQLi Extension in two ways :- Procedure ways or OOPS ways 
   Procedure - function and OOPS - classes and object
   MySQLi work with only MySQL   
2. PDO - php data object 
   PDO work with many Database 

   if you want to switch one database to other databse then use PDO 
   if you sure you use only MySQL then use it 
   if you not sure then use PDO 
*/

// Connecting to Database - We have need three things 
$servername = "localhost";
$username = "root"; // by default root 
$password = "";
// $password = "mohit"; // we get access denied 

/* here password is blank string means no space but if you go in the server then password will be not blank 
if you use remote server then you get servername, username, and password this is scret crendentials by using this you can reach to server
 but here server available inside our computer XAMPP that's why we no need to set password 
*/ 


// Create a Connection 
$conn = mysqli_connect($servername, $username, $password);


// Die if Connection was not successful 
if(!$conn){
    die("Sorry we failed to connect : ". mysqli_connect_error() ); // throw the error 
}
else{
    echo "Connection was Successful";
}





?>