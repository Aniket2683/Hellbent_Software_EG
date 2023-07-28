<?php
$servername = "localhost"; // Replace with your server name if different
$username = "root"; // Replace with your database username
$password = ""; // Replace with your database password
// $dbname = "flower_db"; // Replace with your database name
$dbname = "earthygarden";

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";

if ($conn->query($sql) === true) {
    echo "Successfully inserted";
} else {
    echo "ERROR: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
