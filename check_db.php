<?php
$pdo = new PDO('mysql:host=127.0.0.1;dbname=windows;charset=utf8mb4', 'root', '');
$tables = ['deliveries', 'enquiries'];
foreach ($tables as $table) {
    try {
        $stmt = $pdo->query("SHOW CREATE TABLE $table");
        if ($stmt) {
            print_r($stmt->fetch(PDO::FETCH_ASSOC));
        } else {
            echo "Table $table not found.\n";
        }
    } catch (Exception $e) {
        echo "Error on $table: " . $e->getMessage() . "\n";
    }
}
