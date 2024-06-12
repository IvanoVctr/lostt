<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
<div class="wrapper">
<?php include 'header.php'; ?>
<main>
    <h2>Регистрация</h2>
    <form action="register_process.php" method="POST" class="formm">
        <input type="text" name="username" placeholder="Username" required><br>
        <input type="email" name="email" placeholder="Email" required><br>
        <input type="password" name="password" placeholder="Password" required><br>
        <button type="submit">Зарегистрироваться</button>
        <p>Есть акаунт?<a href="login.php">Войти</a></p>
    </form>
</main>
<?php include 'footer.php'; ?>
</div>
</body>
</html>
