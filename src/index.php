<?php
$host = 'db'; 
$user = 'dev_user';
$pass = 'dev_password';
$db   = 'dev_database';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);
    echo "<h1>🚀 Success! Connected to MySQL inside Docker natively.</h1>";
} catch (PDOException $e) {
    echo "<h1>❌ Connection failed: " . $e->getMessage() . "</h1>";
}
phpinfo();
