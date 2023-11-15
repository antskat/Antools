<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"]??'0';
    $tel = $_POST["tel"]??'0';
    $email = $_POST["email"]??'0';
    $password = $_POST["password"]??'0';

    // Создаем подключение к базе данных
    $servername = "localhost";
    $username = "root";
    $password_db = "root";
    $dbname = "Antools";

    $conn = new mysqli($servername, $username, $password_db, $dbname);

    // Проверка подключения
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $tel = !empty($tel) ? (int)$tel : null;
    // Подготовка SQL-запроса для вставки данных
    $sql = "INSERT INTO users (name, tel, email, password) VALUES ('$name', '$tel', '$email', '$password')";

    // Выполнение SQL-запроса
    if ($conn->query($sql) === TRUE) {
        echo "Данные успешно добавлены в базу данных";
        header("Location: " . $_SERVER['HTTP_REFERER']);
        exit();
    } else {
        echo "Ошибка при добавлении данных: " . $conn->error;
    }

    // Закрытие соединения
    $conn->close();
}
?>
