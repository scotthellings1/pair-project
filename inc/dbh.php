<?php

// dbh = database handler

// the servername, username and password given here are default on xammp
$dbServerName = "127.0.0.1";
$dbUserName = "root";
$dbPassword = "";
$dbName = "wray_contact_form";

// the variables above are created in the order in which they need to be passed
// on to the mysqli_connect() function.
$conn = mysqli_connect($dbServerName, $dbUserName, $dbPassword, $dbName);
