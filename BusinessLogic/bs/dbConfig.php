<?php
// Database configuration
$dbHost     = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName     = "benhvien";

// Create database connection
$db = mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName);

// Check connection
if (!$db) {
    die("Connection failed: " .mysqli_connect_error());
}
?>