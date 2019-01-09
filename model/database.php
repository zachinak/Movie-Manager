<?php
    $dsn = 'mysql:host=localhost;dbname=dsuclass_b1991';
    $username = 'dsuclass_b1991';
    $password = 'dsuclass_b1991';

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('../errors/database_error.php');
        exit();
    }
?>