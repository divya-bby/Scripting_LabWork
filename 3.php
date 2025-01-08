<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minutes to Seconds Converter</title>
</head>
<body>
    <h1>Convert Minutes to Seconds</h1>
    <form method="post" action="">
        <label for="minutes">Enter minutes:</label>
        <input type="number" id="minutes" name="minutes" required>
        <button type="submit">Convert</button>
    </form>

    <?php
    function convertMinutesToSeconds($minutes) {
        return $minutes * 60;
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $minutes = intval($_POST['minutes']);
        $seconds = convertMinutesToSeconds($minutes);
        echo "<p>{$minutes} minute(s) is equal to {$seconds} second(s).</p>";
    }
    ?>
</body>
</html>
