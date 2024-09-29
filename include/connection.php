<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "greenhaven";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}else {
    // If connection is successful, send success message to the frontend
    //echo "<script>alert('Database connection successful');</script>";
}
