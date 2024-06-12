<?php
include 'db_connection.php';
$sql_create_users_table = "CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(255) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL
)";
if ($conn->query($sql_create_users_table) === TRUE) {
    echo "Table 'users' created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}
$sql_create_lost_items_table = "CREATE TABLE IF NOT EXISTS lost_items (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    description TEXT NOT NULL,
    contact_info VARCHAR(255) NOT NULL,
    user_id INT NOT NULL,
    FOREIGN KEY (user_id) REFERENCES users(id)
)";
if ($conn->query($sql_create_lost_items_table) === TRUE) {
    echo "Table 'lost_items' created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}
$conn->close();
?>
