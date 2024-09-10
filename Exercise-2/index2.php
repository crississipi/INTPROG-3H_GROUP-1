<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP File Handling</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            padding: 20px;
        }
        .container {
            max-width: 600px;
            margin: auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        input[type="text"], textarea {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
        .result {
            margin-top: 20px;
        }
        .result p {
            background-color: #f9f9f9;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>File Handling in PHP</h2>
    <form method="POST" action="">
        <label for="filename">Enter the filename:</label>
        <input type="text" id="filename" name="filename" placeholder="example.txt" required>
        
        <label for="content">Content to append (optional):</label>
        <textarea id="content" name="content" rows="4" placeholder="Enter content to append"></textarea>

        <input type="submit" value="Submit">
    </form>

    <div class="result">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $filename = htmlspecialchars($_POST['filename']);
            $contentToAdd = isset($_POST['content']) ? htmlspecialchars($_POST['content']) : '';

            if (file_exists($filename)) {
                echo "<p>File '$filename' already exists.</p>";
            } else {
                echo "<p>File '$filename' does not exist. Creating file...</p>";
                $initialContent = "This is the first line.\nThis is the second line.\n";
                $result = file_put_contents($filename, $initialContent);

                if ($result !== false) {
                    echo "<p>File '$filename' created and content written successfully.</p>";
                } else {
                    echo "<p>Failed to create and write to the file.</p>";
                    exit;
                }
            }

            // Read and display the content of the file
            $content = file_get_contents($filename);
            if ($content !== false) {
                echo "<p><strong>File content:</strong></p>";
                echo "<p>" . nl2br($content) . "</p>";
            } else {
                echo "<p>Failed to read the file.</p>";
            }

            // Append additional content to the file if provided
            if (!empty($contentToAdd)) {
                $result = file_put_contents($filename, $contentToAdd . "\n", FILE_APPEND);
                if ($result !== false) {
                    echo "<p>Additional content appended to '$filename' successfully.</p>";
                } else {
                    echo "<p>Failed to append content to the file.</p>";
                }
            }

            // Read the file line by line and display the content
            $lines = file($filename);
            if ($lines !== false) {
                echo "<p><strong>Updated file content (line by line):</strong></p>";
                foreach ($lines as $lineNumber => $line) {
                    echo "<p>Line " . ($lineNumber + 1) . ": " . htmlspecialchars($line) . "</p>";
                }
            } else {
                echo "<p>Failed to read the file line by line.</p>";
            }
        }
        ?>
    </div>
</div>

</body>
</html>