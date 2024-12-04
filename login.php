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

<!-- Форма авторизации -->

    <form action="signin.php" method="post">
        <label>Логин</label>
        <input type="text" name="login" placeholder="Введите свой логин">
        <label>Пароль</label>
        <input type="password" name="password" placeholder="Введите пароль">
        <button type="submit">Войти</button>
        <p>
            У вас нет аккаунта? - <a href="/register.php">зарегистрируйтесь</a>!
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