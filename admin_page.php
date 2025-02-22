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

// Fetch data from the 'legal_casess' table
$query = "SELECT * FROM legal_casess";
$stmt = $pdo->query($query);
$cases = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Legal Cases</title>
    <style>
        body {
            font-family: Arial, sans-serif;
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
            width: 90%;
            max-width: 1200px;
            margin: 30px auto;
            padding: 20px;
            background-color: white;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #003366;
            color: white;
        }

        .btn-download {
            background-color: #003366;
            color: white;
            padding: 8px 12px;
            text-decoration: none;
            border-radius: 4px;
            cursor: pointer;
            display: inline-block;
        }

        .btn-download:hover {
            background-color: #00509e;
        }

        @media screen and (max-width: 768px) {
            header {
                font-size: 1.5rem;
                padding: 15px;
            }
            
            .container {
                width: 95%;
                padding: 15px;
            }
            
            table {
                font-size: 14px;
            }
            
            th, td {
                padding: 8px;
            }
            
            .btn-download {
                padding: 6px 10px;
                font-size: 12px;
            }
        }

        @media screen and (max-width: 480px) {
            table {
                display: block;
                overflow-x: auto;
                white-space: nowrap;
            }
            
            th, td {
                padding: 6px;
                font-size: 12px;
            }
            
            .btn-download {
                padding: 5px 8px;
                font-size: 10px;
            }
        }
    </style>
</head>
<body>

    <header>
        Admin Dashboard - Legal Cases
    </header>
    
    <div class="container">
        <h2>All Legal Cases</h2>

        <table>
            <thead>
                <tr>
                    <th>Document Name</th>
                    <th>Email</th>
                    <th>Analysis Text</th>
                    <th>Download</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($cases as $case): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($case['document_name']); ?></td>
                        <td><?php echo htmlspecialchars($case['email']); ?></td>
                        <td><?php echo htmlspecialchars(substr($case['analysis_text'], 0, 100)) . "..."; ?></td>
                        <td>
                            <a href="download.php?id=<?php echo $case['id']; ?>" class="btn-download">Download</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

</body>
</html>
