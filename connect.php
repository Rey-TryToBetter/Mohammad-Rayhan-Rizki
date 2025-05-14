<?php
$host = "localhost";
$user = "rey";
$pass = "rey";
$db = "db_porto";

error_reporting(E_ALL);
ini_set('display_errors', 1);

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error() . " (" . mysqli_connect_errno() . ")");
}
?>