<?php
$servername = "alpsrv.mysql.database.azure.com";
$username = "sqladmin";
$password = "Pa55w.rd1234";
$dbname = "alpdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$username = $_POST['username'];
$password = $_POST['password'];

// Create a prepared statement
$stmt = $conn->prepare("SELECT * FROM users WHERE username = ? AND password = ?");
$stmt->bind_param("ss", $username, $password);

$stmt->execute();

$result = $stmt->get_result();

if ($result->num_rows > 0) {
    // The user is authenticated
    echo 'Welcome, ' . htmlspecialchars($username) . '!';
} else {
    // The username or password is incorrect
    echo 'Invalid username or password.';
}

$stmt->close();
$conn->close();
?>