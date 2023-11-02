<?php 
echo "Welcome to the world of dates <br>";
// search date in php manual 

$d = date("l");
echo "Todays date is  $d <br>";


// https://www.php.net/manual/en/function.date.php

// set the default timezone to use.
// date_default_timezone_set('UTC');
date_default_timezone_set("Asia/Kolkata");



// Prints something like: Monday
echo date("l") ."<br>";

// Prints something like: Monday 8th of August 2005 03:12:46 PM
echo date('l jS \of F Y h:i:s A') ."<br>";

// Prints: July 1, 2000 is on a Saturday
echo "July 1, 2000 is on a " . date("l", mktime(0, 0, 0, 7, 1, 2000)) ."<br>";

/* use the constants in the format parameter */
// prints something like: Wed, 25 Sep 2013 15:28:57 -0700
echo date(DATE_RFC2822) ."<br>";

// prints something like: 2000-07-01T00:00:00+00:00
echo date(DATE_ATOM, mktime(0, 0, 0, 7, 1, 2000)) ."<br>";

// $year = date('Y');
$year = date("Y");
echo "Copyright $year | All rights reserved <br>";
?>