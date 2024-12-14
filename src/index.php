<?php
// Проверка подключения к PostgreSQL
try {
    $pdo = new PDO('pgsql:host=postgres;dbname=mydb', 'myuser', 'mypassword');
    echo "Подключение к PostgreSQL успешно!<br>";
} catch (PDOException $e) {
    echo "Ошибка подключения к PostgreSQL: " . $e->getMessage() . "<br>";
}

// Проверка подключения к Redis
try {
    $redis = new Redis();
    $redis->connect('redis', 6379);
    echo "Подключение к Redis успешно!<br>";
} catch (Exception $e) {
    echo "Ошибка подключения к Redis: " . $e->getMessage() . "<br>";
}
?>