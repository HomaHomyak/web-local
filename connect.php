<?php
    $servername = "MySQL-8.2";
    $username = "root";
    $password = "";
    $dbname = "registerUser";

    $connect = new mysqli($servername, $username, $password, $dbname);

    if(!$connect){
        die('Error connect to database');
    }
?>

