<?php
$host = 'localhost'; // Хост базы данных
$dbname = 'auto_gruzia'; // Имя базы данных
$username = 'root'; // Имя пользователя базы данных
$password = ''; // Пароль пользователя

// Создаем соединение
$conn = new mysqli($host, $username, $password, $dbname);

// Проверяем соединение
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>