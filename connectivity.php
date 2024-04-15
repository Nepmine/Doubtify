<?php

echo "Hello, how are you !!<br>";
$servername = "localhost";
$username = "root";
$password = "";
$database = "doubtify";

// Establish connection
$connection = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$connection) {
    // If connection fails, provide an informative error message and exit
    die("Error connecting to MySQL: " . mysqli_connect_error());
} else {
    // If connection succeeds, display success message
    echo "The connection was established successfully !!";
}
