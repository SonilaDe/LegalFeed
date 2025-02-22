<?php

// Database connection settings
$host = 'localhost';  // Database host
$dbname = 'userss';  // Your database name
$username = 'root';  // Your database username
$password = '';  // Your database password

// Create a PDO connection
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}


// Include database connection
include('db_connection.php');

// Check if the 'id' parameter is provided in the URL
if (isset($_GET['id'])) {
    $caseId = (int)$_GET['id'];

    // Fetch the analysis text for the given case ID
    $query = "SELECT document_name, analysis_text FROM legal_casess WHERE id = :id";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(':id', $caseId, PDO::PARAM_INT);
    $stmt->execute();

    // Check if the case was found
    if ($stmt->rowCount() > 0) {
        $case = $stmt->fetch(PDO::FETCH_ASSOC);

        // Set headers for downloading the file
        header('Content-Type: text/plain');
        header('Content-Disposition: attachment; filename="' . $case['document_name'] . '_analysis.txt"');
        header('Content-Length: ' . strlen($case['analysis_text']));

        // Output the analysis text
        echo $case['analysis_text'];
        exit;
    } else {
        echo "Case not found.";
    }
} else {
    echo "Invalid case ID.";
}
?>

