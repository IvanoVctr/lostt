<?php include 'header.php'; ?>
<?php
include 'db_connection.php';
if(isset($_GET['search'])) {
    $search_query = $_GET['search'];
    $sql_search = "SELECT * FROM lost_items WHERE title LIKE '%$search_query%' OR description LIKE '%$search_query%'";
    $result_search = $conn->query($sql_search);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Главная</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/min.css"> 
</head>
<body>
<div class="wrapper">
<main>
    <form action="index.php" method="GET">
        <input type="text" name="search" placeholder="Например: сумка" class="profile-inpt">
        <button type="submit" class="profile-btn">Поиск</button>
    </form>

    <?php if(isset($result_search) && $result_search->num_rows > 0) { ?>
        <br>
        <h2>Результат поиска:</h2>
        <?php while($row = $result_search->fetch_assoc()) { ?>
            <br>
            <div class="found_lost">
                <h4><?php echo $row["title"]; ?></h4>
                <br>
                <p>Описание: <?php echo $row["description"]; ?></p>
                <p>Контакты: <?php echo $row["contact_info"]; ?></p>
            </div>
        <?php } ?>
    <?php } ?>

            <form action="" class="add_lost">
                <h2>Добавить объявление</h2>
                <input type="text" name="title" placeholder="Название">
                <br>
                <textarea name="description" placeholder="Описание"></textarea>
                <br>
                <input type="text" name="contact_info" placeholder="Контакты">
                <br>
                <button type="submit">Добавить</button>
            </form>
</main>
<?php include 'footer.php'; ?>
</div>
</body>
</html>
