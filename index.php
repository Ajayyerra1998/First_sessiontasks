<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "CREATE TABLE Employeetable(
employeeid INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
employeename VARCHAR(30) NOT NULL,
employeesalary INT(10) NOT NULL
)";

if ($conn->query($sql) === TRUE) {
  echo "Employee table created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();
?>