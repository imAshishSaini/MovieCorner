<?php
$servername = "localhost";
$username = "root";
$password = "";

$conn = new mysqli($servername, $username, $password);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


$sql = "CREATE DATABASE moviecorne";
if ($conn->query($sql) === TRUE) {
  echo "Database created successfully";
} else {
  echo "Error creating database: " . $conn->error;
}

$database = "moviecorner";
$conn = new mysqli($servername, $username, $password, $database);


$sql = "CREATE TABLE user (id BIGINT NOT NULL AUTO_INCREMENT PRIMARY KEY, name VARCHAR(256) NOT NULL, emailId VARCHAR(256) NOT NULL UNIQUE, password VARCHAR(256) NOT NULL)";

if ($conn->query($sql) === TRUE) {
  echo "Table user Created Successfully";
} else {
  echo "Error creating table: " . $conn->error;
}
?>