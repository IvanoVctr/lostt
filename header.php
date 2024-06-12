
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lost & Found</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/min.css"> 
</head>
<body>
    <header>
        <div class="head">
        <a href="index.php" class="logo">Lost & Found</a>

        <?php 
        session_start();
        if(basename($_SERVER['PHP_SELF']) != 'profile.php') { 
            if(!empty($_SESSION['name'])){
            ?>
            <div class="head_btn">
            <a href="profile.php" class="profile-btn"><?php echo $_SESSION['name'];?></a>
            <a href="logout.php" class="profile-btn">Выйти</a>
            </div>
        <?php } else { ?>
            <div class="head_btn">
            <a href="profile.php" class="profile-btn">Войти</a>
            <a href="register.php" class="profile-btn">Регистрация</a>
            </div
            <?php
        }
    
    } ?>
    </div>
    </header>
</body>
</html>
