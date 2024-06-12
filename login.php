
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/min.css"> 
</head>
<body>
<div class="wrapper">
<?php include 'header.php'; ?>
<main>
    <h2>Вход</h2>
    <form action="login_process.php" method="POST" class="formm">
        <input type="email" name="email" placeholder="Email" required><br>
        <input type="password" name="password" placeholder="Password" required><br>
        <button type="submit">Войти</button>
        <p>Еще нет аккаунта?<a href="register.php">Регистрация</a></p>
    </form>
</main>
<?php include 'footer.php'; ?>
</div>
</body>
</html>
