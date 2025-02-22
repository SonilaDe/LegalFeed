<?php
session_start();
include 'db.php';

if (!isset($_SESSION['user_id'])) {
    echo "You need to log in first.";
    exit;
}

$userId = $_SESSION['user_id'];

$stmt = $conn->prepare("SELECT * FROM documents WHERE user_id = ?");
$stmt->bind_param("i", $userId);
$stmt->execute();
$result = $stmt->get_result();


while ($row = $result->fetch_assoc()) {
    echo "<div>";
    echo "<h3>" . htmlspecialchars($row['title']) . "</h3>";
    echo "<pre>" . htmlspecialchars($row['content']) . "</pre>";
    echo "</div>";
}

$stmt->close();
?>
