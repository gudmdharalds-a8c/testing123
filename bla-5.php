<?php


// Bad variables. Should never happen.
echo $_SERVER['PHP_AUTH_PW']; 
echo $_SERVER['HTTP_X_IP_TRAIL'];
echo $_SERVER['HTTP_X_FORWARDED_FOR'];  
echo $_SERVER["REMOTE_ADDR"]; 	// let's test one with double quotes too


$query = "SELECT * FROM $wpdb->users"; // Error.

