<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['file'])) {
    if ($_FILES['file']['error'] !== UPLOAD_ERR_OK) {
        echo json_encode(['analysis' => 'File upload failed.']);
        exit;
    }

    $uploadDirectory = 'uploads/';
    if (!is_dir($uploadDirectory)) {
        mkdir($uploadDirectory, 0777, true); 
    }

    $uploadFile = $uploadDirectory . basename($_FILES['file']['name']);
    
    if (move_uploaded_file($_FILES['file']['tmp_name'], $uploadFile)) {
    
        $zip = new ZipArchive;
        if ($zip->open($uploadFile) === TRUE) {
            
            
            $xmlContent = '';
            if (($index = $zip->locateName('word/document.xml')) !== false) {
                $xmlContent = $zip->getFromIndex($index);
            }
            $zip->close();
            
         t
            if ($xmlContent) {
                $xml = simplexml_load_string($xmlContent);
                $xml->registerXPathNamespace('w', 'http://schemas.openxmlformats.org/wordprocessingml/2006/main');
                
                $texts = $xml->xpath('//w:t');
                $text = '';
                foreach ($texts as $t) {
                    $text .= (string)$t . ' ';
                }
                
              
                $analysis = analyzeWithAI($text);
                
                echo json_encode(['analysis' => $analysis]);
            } else {
                echo json_encode(['analysis' => 'Error reading the document content.']);
            }
        } else {
            echo json_encode(['analysis' => 'Error opening the file.']);
        }
    } else {
        echo json_encode(['analysis' => 'Error saving the file.']);
    }
} else {
    echo json_encode(['analysis' => 'No file uploaded.']);
}

