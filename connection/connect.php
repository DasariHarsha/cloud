<?php

//main connection file for both admin & front end
$servername = "foodpick.mysql.database.azure.com"; //server
$username = "harsha"; //username
$password = "Gowthami@1"; //password
$dbname = "foodpick";  //database

// Create connection
$db = mysqli_connect($servername, $username, $password, $dbname); // connecting 
// Check connection
if (!$db) {       //checking connection to DB	
    die("Connection failed: " . mysqli_connect_error());
}

?>
