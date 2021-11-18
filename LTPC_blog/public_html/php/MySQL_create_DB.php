<?php

include("../config.php");

// Create connection

$conn = new mysqli($host, $user, $pass);
if ($conn->connect_error) { die("Connection failed: " . $conn->connect_error); }

// ------------------------
// MySQL - create database
// ------------------------

// Create database
$sql = "CREATE DATABASE $dbase";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
    include("MySQL_create_TABLE.php");                    
    
} else {
    echo "Error creating database: " . $conn->error;
    include("MySQL_create_TABLE.php");                    
}

$conn->close();
?> 
