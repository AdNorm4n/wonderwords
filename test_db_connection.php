<?php
require_once 'db_connection.php';

try {
    // Attempt to query the database
    $stmt = $pdo->query('SELECT 1');
    echo "Database connection is successful!";
} catch (PDOException $e) {
    echo "Database connection failed: " . $e->getMessage();
}
?>
