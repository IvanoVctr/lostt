<?php include 'header.php'; ?>
<?php
if(!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

include 'db_connection.php';

$user_id = $_SESSION['user_id'];

// Запрос для получения данных пользователя из базы данных
$sql_user_info = "SELECT email FROM users WHERE id = '$user_id'";
$result_user_info = $conn->query($sql_user_info);

// Получение основных данных пользователя
$user_info = $result_user_info->fetch_assoc();
$user_email = $user_info['email'];

// Запрос для получения объявлений пользователя
$sql_lost_items = "SELECT * FROM lost_items WHERE user_id = '$user_id'";
$result_lost_items = $conn->query($sql_lost_items);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/min.css"> 
</head>
<body>
<div class="wrapper">
    <main>
    <h1>Мой профиль</h1>
    <br>
    <h2>Основные данные:</h2>
    <p>Имя: <?php echo $_SESSION['name'] ?></p>
    <p>Email: <?php echo $user_email; ?></p>
    <br>
    <h2>Mои объявления:</h2>
    <br>
    <div class="activbe_lost">
    <?php
    if ($result_lost_items->num_rows > 0) {
        while($row = $result_lost_items->fetch_assoc()) {
            echo "<h3>" . $row["title"]. "</h3>";
            echo "<p>" . $row["description"]. "</p>";
            echo "<p>Contact: " . $row["contact_info"]. "</p>";
        }
    } else {
        echo "Нет активных обьявлений.";
    }
    ?>
  </div>
    <a href="logout.php" class="logout">Выйти</a>
    </main>
    <?php include 'footer.php'; ?>
</div>
</body>
</html>
