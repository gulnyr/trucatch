<?php

try {
    $user='root';
    $password='';
    $host = 'localhost';
    $dbname = 'mydb';
    $pass = '';
    $dbh = new PDO("mysql: host=$host; dbname=$dbname", $user, $password);
    $dbh->query("SELECT * FROM departments");
}

catch(PDOException $e) {
    echo "Здесь ошибка такого рода:" . file_put_contents('PDOErrors.txt', $e->getMessage()."\n", FILE_APPEND);
}


?>