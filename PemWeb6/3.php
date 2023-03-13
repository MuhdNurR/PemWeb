<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";

// Create Connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check Connection
if ($mysqli->connect_errno) {
    printf("Connect failed: %s<br />", $mysqli->connect_error);
    exit();
}

printf('Connected successfully.<br />');

// Create Database
/* $sql = "CREATE TABLE liga (
    "id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, ".
    "kode VARCHAR(3) NOT NULL, ". 
    "negara VARCHAR(30) NOT NULL, ".
    "champion int(3) ".
    ")";" */

if (mysqli_query($conn, $sql)) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . mysqli_error($conn);
}

mysqli_close($conn);
/* CREATE TABLE liga (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    kode VARCHAR(3) NOT NULL,
    negara VARCHAR(30) NOT NULL,
    champion int(3)
    ) */