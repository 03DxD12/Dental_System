<?php
$host = getenv("DB_HOST") ?: "127.0.0.1";
$username = getenv("DB_USER") ?: "root";
$password = getenv("DB_PASS") !== false ? getenv("DB_PASS") : "";
$dbname = getenv("DB_NAME") ?: "dental_booking_db";
$port = (int) (getenv("DB_PORT") ?: 3306);

// Create connection
$conn = new mysqli($host, $username, $password, $dbname, $port);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Set charset to utf8mb4 for better security & compatibility
$conn->set_charset("utf8mb4");
?>