<?php
// Start the sessions and get the data
session_start();
session_unset(); // unset the all session variable
session_destroy(); // destory the current sessions
echo "You have been Logged Out"
?> 