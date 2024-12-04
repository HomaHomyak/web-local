<?php
    session_start();
    require_once 'connect.php';

    $login = $_POST['login'];
    $password = md5($_POST['password']);

    $check_user = mysqli_query($connect, "SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password'");

    if (mysqli_num_rows($check_user) > 0) { // Добавлена открывающая скобка
        $user = mysqli_fetch_assoc($check_user);

        $_SESSION['user'] = [
            "id" => $user['id'],
            "login" => $user['login'],
            "avatar" => $user['avatar'],
            "email" => $user['email']
        ];

        header('location: profile.php'); // Исправлена ссылка 
    } else {
        $_SESSION['message'] = 'Неверный логин или пароль';
        header('Location: login.php');
    }
?>