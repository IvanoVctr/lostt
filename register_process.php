<?php
include 'db_connection.php';

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

// Hash the password
$password_hash = password_hash($password, PASSWORD_DEFAULT);

$sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password_hash')";
if ($conn->query($sql) === TRUE) {
    echo "Registration successful. Please <a href='login.php'>login</a>.";
} else {
    echo "Error: ". $sql. "<br>". $conn->error;
}
$conn->close();
?>