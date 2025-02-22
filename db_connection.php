<?php
// Replace these with your database credentials
$host = "localhost"; // Typically localhost if using XAMPP or local server
$dbname = "userss"; // Replace with your actual database name
$username = "root"; // Replace with your database username
$password = ""; // Replace with your database password

try {
    // Create a PDO instance and connect to the database
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // For error handling
} catch (PDOException $e) {
    // Handle errors
    die("Connection failed: " . $e->getMessage());
}
?>
