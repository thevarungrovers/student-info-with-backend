<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "student_info";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$input_admn = $_POST['input_admn'];
$input_name = $_POST['input_name'];
$input_stream = $_POST['input_stream'];

$sql = "INSERT INTO student_details (input_admn, input_name, input_stream)
VALUES ('$input_admn', '$input_name ', '$input_stream')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>