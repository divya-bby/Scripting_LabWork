<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['username'])) {
    header("Content-Type: text/plain");

   
    $host = 'localhost';
    $dbname = 'db_pkmc_2079_sl';
    $username = 'root';
    $password = '';

    try {
        $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $inputUsername = trim($_POST['username']);
        if (!empty($inputUsername)) {
            $stmt = $pdo->prepare("SELECT COUNT(*) FROM users WHERE username = :username");
            $stmt->execute(['username' => $inputUsername]);
            $count = $stmt->fetchColumn();

            if ($count > 0) {
                echo "Username available.";
            } else {
                echo "Username not available.";
            }
        } else {
            echo "Please enter a username.";
        }
    } catch (PDOException $e) {
        echo "Database error: " . $e->getMessage();
    }
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Reset</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        #username-status {
            margin-top: 10px;
            font-weight: bold;
            color: red;
        }
    </style>
</head>
<body>
    <h2>Password Reset</h2>
    <label for="username">Enter Username:</label>
    <input type="text" id="username" name="username" placeholder="Enter your username" onkeyup="checkUsername()">
    <div id="username-status"></div>

    <script>
        function checkUsername() {
            const username = document.getElementById('username').value.trim();
            const statusDiv = document.getElementById('username-status');

            if (username === "") {
                statusDiv.textContent = "";
                return;
            }

            const xhr = new XMLHttpRequest();
            xhr.open("POST", "", true);
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

            xhr.onreadystatechange = function () {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    statusDiv.textContent = xhr.responseText;
                }
            };

            xhr.onerror = function () {
                statusDiv.textContent = "Error contacting the server.";
            };

            xhr.send("username=" + encodeURIComponent(username));
        }
    </script>
</body>
</html>
