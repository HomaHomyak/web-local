<?php
    session_start();
    if (isset($_SESSION['user'])) { // Проверяем, что ключ user существует
        header('Location: profile.php');
    }
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Авторизация и регистрация</title>
    <link rel="stylesheet" href="css/logandreg.css">
</head>
<body>

    <!-- Форма регистрации -->

    <form action="signup.php" method="post" enctype="multipart/form-data">
        <label>Логин</label>
        <input type="text" name="login" placeholder="Введите свой логин">
        <label>Почта</label>
        <input type="email" name="email" placeholder="Введите адрес своей почты">
        <label>Изображение профиля</label>
        <input type="file" name="avatar">
        <label>Пароль</label>
        <input type="password" name="password" placeholder="Введите пароль">
        <label>Подтверждение пароля</label>
        <input type="password" name="password_confirm" placeholder="Подтвердите пароль">
        <button type="submit">Зарегестрироваться</button>
        <p>
            У вас уже есть аккаунт? - <a href="login.php">авторизируйтесь</a>!
        </p>
        <p>
            <a href="profile.php">Назад</a>
        </p>
        <?php
            if (isset($_SESSION['message'])) { // Проверяем, что ключ message существует
                echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
            }
            unset($_SESSION['message']); // Удаляем ключ message после вывода сообщения
        ?>
    </form>
</body>
</html>