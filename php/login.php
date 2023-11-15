<?php
session_start(); // Инициализация сессии

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $inputUsername = $_POST["lname"];
    $inputPassword = $_POST["lpassword"];

    $servername = "localhost";
    $dbUsername = "root";
    $dbPassword = "root";
    $dbname = "Antools";

    $conn = new mysqli($servername, $dbUsername, $dbPassword, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Используем подготовленный запрос
    $stmt = $conn->prepare("SELECT * FROM users WHERE name = ? AND password = ?");
    $stmt->bind_param("ss", $inputUsername, $inputPassword); // "ss" означает, что оба параметра - строки
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        // Пользователь найден, получим данные о пользователе
        $stmt->bind_result($id, $name, $email, $phone, $password);
        $stmt->fetch();

        // Сохраняем данные в сессии
        $_SESSION['username'] = $name;

        // Редирект на страницу приветствия
        header("Location: ../antools.php");
        exit();
    } else {
        echo "Неверное имя или пароль";
    }

    $stmt->close();
    $conn->close();
}
?>
