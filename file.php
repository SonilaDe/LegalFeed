<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Legal Document AI Analysis</title>
    <script src="https://cdn.jsdelivr.net/npm/@tensorflow/tfjs"></script> <!-- TensorFlow.js (Optional) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/mammoth/1.4.2/mammoth.browser.min.js"></script> <!-- Mammoth.js for Word -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.10.377/pdf.min.js"></script> <!-- PDF.js for PDFs -->
    <style>
        /* Styling */
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
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
            flex-wrap: wrap;
        }

        input[type="file"], input[type="email"], input[type="text"] {
            font-size: 1rem;
            padding: 10px;
            margin-right: 20px;
            border: 2px solid #003366;
            border-radius: 4px;
            width: 100%;
            max-width: 250px;
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

        .output {
            background-color: #e9f5ff;
            padding: 20px;
            border-radius: 5px;
            margin-top: 20px;
            border: 1px solid #ddd;
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

        /* Media Queries for Responsiveness */
        @media screen and (max-width: 768px) {
            .container {
                width: 95%;
            }

            header {
                font-size: 1.5rem;
                padding: 15px;
            }

            h2 {
                font-size: 1.2rem;
            }

            .file-upload {
                flex-direction: column;
                align-items: flex-start;
            }

            input[type="file"], input[type="email"], input[type="text"] {
                margin-right: 0;
                margin-bottom: 10px;
                width: 100%;
            }

            button {
                width: 100%;
                margin-top: 10px;
            }

            .output {
                padding: 15px;
            }
        }

        @media screen and (max-width: 480px) {
            header {
                font-size: 1.2rem;
                padding: 10px;
            }

            h2 {
                font-size: 1rem;
            }

            .file-upload {
                flex-direction: column;
                align-items: flex-start;
            }

            .output {
                padding: 10px;
            }

            button {
                width: 100%;
                padding: 10px;
            }
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
            <input type="text" id="fileNameInput" placeholder="Enter document name" />
            <input type="email" id="emailInput" placeholder="Enter your email" />
            <button onclick="analyzeDocument()">Analyze Document</button>
            <button onclick="saveCase()" id="saveButton" style="display:none;">Save Case</button>
        </div>

        <div class="output">
            <h3>AI Analysis Result:</h3>
            <pre id="output">Your analysis will appear here.</pre>
        </div>
    </div>

   

    <script>
        let caseData = "";  

        
        async function analyzeDocument() {
            const fileInput = document.getElementById('fileInput');
            const file = fileInput.files[0];
            
            if (!file) {
                alert("Please upload a document.");
                return;
            }

            const fileType = file.type;
            let text = "";

            if (fileType === "application/pdf") {
              
                text = await extractTextFromPDF(file);
            } else if (fileType === "application/vnd.openxmlformats-officedocument.wordprocessingml.document") {
              
                text = await extractTextFromWord(file);
            } else {
                alert("Unsupported file type. Please upload a Word (.docx) or PDF file.");
                return;
            }

            document.getElementById('output').textContent = "Extracting text...\n" + text;

            const analysis = analyzeText(text);
            document.getElementById('output').textContent += "\n\nAI Analysis: " + analysis;

          
            caseData = analysis;

            
            document.getElementById('saveButton').style.display = 'block';  
        }

        function saveCase() {
    const fileName = document.getElementById('fileNameInput').value.trim();
    const email = document.getElementById('emailInput').value.trim(); 
    if (!fileName || !email) {
        alert("Please enter a name and email for the document.");
        return;
    }

    const caseData = document.getElementById('output').textContent;


    const data = {
        name: fileName,
        text: caseData,
        email: email
    };

    console.log(data); 

    const xhr = new XMLHttpRequest();
    xhr.open("POST", "save_case.php", true); 
    xhr.setRequestHeader("Content-Type", "application/json");

    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4 && xhr.status === 200) {
            const response = JSON.parse(xhr.responseText);
            if (response.status === "success") {
                alert("Document saved successfully!");
            } else {
                alert("Failed to save the document. Error: " + response.message);
            }
        }
    };

    xhr.send(JSON.stringify(data)); 
}

 
        function extractTextFromWord(file) {
            return new Promise((resolve, reject) => {
                const reader = new FileReader();
                
                reader.onload = function(event) {
                    const arrayBuffer = event.target.result;
                    mammoth.extractRawText({ arrayBuffer: arrayBuffer })
                        .then(function(result) {
                            resolve(result.value);
                        })
                        .catch(function(err) {
                            reject("Error extracting text from Word document.");
                        });
                };
                
                reader.onerror = function() {
                    reject("Error reading file.");
                };
                
                reader.readAsArrayBuffer(file);  
            });
        }

        
        function analyzeText(text) {
            const categories = {
                "Contract": ["agreement", "terms", "clause", "contract", "party"],
                "Litigation": ["lawsuit", "court", "case", "plaintiff", "defendant"],
                "Compliance": ["regulation", "compliance", "policy", "audit", "law"]
            };

            const lowerCaseText = text.toLowerCase();

            for (const category in categories) {
                for (const keyword of categories[category]) {
                    if (lowerCaseText.includes(keyword)) {
                        return `This document appears to be related to: ${category}. Please review the details of this category.`;
                    }
                }
            }

            return "Unable to classify the document. Please review manually.";
        }
    </script>
</body>
</html>