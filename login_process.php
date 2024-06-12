<?php
session_start();
include 'db_connection.php';

$email = $_POST['email'];
$password = $_POST['password'];

// Hash the input password
$input_password_hash = password_hash($password, PASSWORD_DEFAULT);

$sql = "SELECT id, username, password FROM users WHERE email = '$email'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    // Compare the input password hash with the hash in the database
    if (password_verify($password, $row['password'])) {
        $_SESSION['user_id'] = $row['id'];
        $_SESSION['name'] = $row['username'];
        header("Location: profile.php");
        exit();
    } else {
        echo "Login failed. Please check your credentials.";
    }
} else {
    echo "Login failed. Please check your credentials.";
}
?>