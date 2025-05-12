<?php
// Database configuration
$host = "localhost";     // Database host
$username = "root";      // Database username
$password = "";          // Database password
$database = "mydatabase"; // Your database name

// Create connection
try {
  $conn = mysqli_connect($host, $username, $password, $database);
  
  // Check connection
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
  echo "Connected successfully!";
  
} catch (Exception $e) {
  echo "Connection failed: " . $e->getMessage();
}

// You can comment out or remove the success message later
?>