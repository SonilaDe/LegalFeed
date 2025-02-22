<?php
// This part of the PHP code is to handle file saving from the JavaScript code.
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Decode JSON data sent from JS
    $data = json_decode(file_get_contents('php://input'), true);

    // Check if data is received
    if (isset($data['name']) && isset($data['text'])) {
        // Sanitize the document name to avoid issues with special characters
        $fileName = basename($data['name']) . ".txt";  // Saving the file as a text file

        // Specify the path to save the document
        $directory = __DIR__ . '/saved_documents';
        if (!is_dir($directory)) {
            mkdir($directory, 0777, true); // Create directory if not exists
        }

        // Define the file path
        $filePath = $directory . DIRECTORY_SEPARATOR . $fileName;

        // Save the text to a file in the 'saved_documents' directory
        if (file_put_contents($filePath, $data['text'])) {
            echo json_encode(["status" => "success", "message" => "Document saved"]);
        } else {
            echo json_encode(["status" => "error", "message" => "Failed to save document"]);
        }
    } else {
        echo json_encode(["status" => "error", "message" => "Invalid data received"]);
    }
}
?>
