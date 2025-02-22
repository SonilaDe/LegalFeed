<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Legal Document AI Analysis</title>
    <script src="https://cdn.jsdelivr.net/npm/@tensorflow/tfjs"></script> <!-- TensorFlow.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/mammoth/1.4.2/mammoth.browser.min.js"></script> <!-- Mammoth.js for Word -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.10.377/pdf.min.js"></script> <!-- PDF.js for PDFs -->
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f6f9;
            margin: 0;
            padding: 0;
            color: #333;
        }
        header {
            background-color: #003366;
            color: white;
            text-align: center;
            padding: 20px;
            font-size: 2rem;
        }
        .container {
            width: 80%;
            margin: 30px auto;
            padding: 20px;
            background-color: white;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }
        h2 {
            font-size: 1.5rem;
            margin-bottom: 20px;
            color: #003366;
        }
        .file-upload {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 20px;
        }
        input[type="file"] {
            font-size: 1rem;
            padding: 10px;
            margin-right: 20px;
            border: 2px solid #003366;
            border-radius: 4px;
        }
        button {
            background-color: #003366;
            color: white;
            border: none;
            padding: 12px 20px;
            font-size: 1rem;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        button:hover {
            background-color: #00509e;
        }
        pre {
            background-color: #f0f0f0;
            padding: 15px;
            border-radius: 5px;
            font-size: 1rem;
            max-height: 300px;
            overflow-y: auto;
            white-space: pre-wrap;
        }
        .footer {
            text-align: center;
            margin-top: 50px;
            font-size: 1rem;
            color: #666;
        }
        .footer a {
            color: #003366;
            text-decoration: none;
        }
        .footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <header>
        Legal Document AI Analysis
    </header>
    
    <div class="container">
        <h2>Upload a Legal Document for Analysis</h2>
        <div class="file-upload">
            <input type="file" id="fileInput" />
            <button onclick="analyzeDocument()">Analyze Document</button>
            <button onclick="saveCase()" id="saveButton" style="display:none;">Save Case</button>
        </div>
        <div class="output">
            <h3>AI Analysis Result:</h3>
            <pre id="output">Your analysis will appear here.</pre>
        </div>
    </div>

    <div class="footer">
        <p>Powered by <a href="https://www.tensorflow.org/js" target="_blank">TensorFlow.js</a></p>
    </div>

    <script>
// Function to handle document analysis
function analyzeDocument() {
    const fileInput = document.getElementById('fileInput');
    const file = fileInput.files[0];

    if (!file) {
        alert('Please upload a document.');
        return;
    }

    const formData = new FormData();
    formData.append('document', file);  // Append the file to the FormData object

    fetch('your_php_endpoint.php', {  // Make sure the correct endpoint is used
        method: 'POST',  // Ensure that the method is POST
        body: formData   // Sending FormData
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            document.getElementById('output').textContent = data.analysis;
            document.getElementById('saveButton').style.display = 'inline-block'; // Show the Save Case button
        } else {
            document.getElementById('output').textContent = 'Error: ' + data.message;
        }
    })
    .catch(error => {
        document.getElementById('output').textContent = 'Error analyzing document: ' + error;
    });
}

    </script>

</body>
</html>
