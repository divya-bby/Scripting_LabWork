<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Convert Last 3 Characters to Uppercase</title>
</head>
<body>
    <h1>Convert Last 3 Characters to Uppercase</h1>
    <form method="POST">
        <label for="inputString">Enter a string:</label>
        <input type="text" id="inputString" name="inputString" required>
        <button type="submit">Convert</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $inputString = $_POST['inputString'];

        if (strlen($inputString) < 3) {
            $result = strtoupper($inputString);
        } else {
            $start = substr($inputString, 0, -3);
            $end = strtoupper(substr($inputString, -3));
            $result = $start . $end;
        }

        echo "<h2>Result:</h2>";
        echo "<p>Original String: " . htmlspecialchars($inputString) . "</p>";
        echo "<p>Converted String: " . htmlspecialchars($result) . "</p>";
    }
    ?>
</body>
</html>
