<?php
$servername = "localhost";
$username = "username";
$password = "";
$dbname = "icecream";

$set1 = $_POST['name'];
$set2 = $_POST['email'];
$set2 = $_POST['password'];
$set4 = $_POST['repassword'];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO register (name,email,password,repassword)
VALUES ($set1,$set2,$set3,$set4)";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>