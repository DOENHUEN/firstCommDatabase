<?php
// dit zetten we in een apart bestand zodat we dit ook apart kunnen aanroepen om te testen

$servername = "localhost";
$username = "root";
$password = "";
$database = "login";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
// echo "Connected successfully";
?>
