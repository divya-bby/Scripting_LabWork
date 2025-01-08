<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Power Calculator</title>
</head>
<body>
    <h1>Calculate Power</h1>
    <form method="post" action="">
        <label for="voltage">Enter Voltage:</label>
        <input type="number" id="voltage" name="voltage" step="any" required>
        <br><br>
        <label for="current">Enter Current:</label>
        <input type="number" id="current" name="current" step="any" required>
        <br><br>
        <button type="submit">Calculate Power</button>
    </form>

    <?php
    function calculatePower($voltage, $current) {
        return $voltage * $current;
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $voltage = $_POST['voltage'];
        $current = $_POST['current'];
        $power = calculatePower($voltage, $current);
        echo "<p>The power is $power watts for a voltage of $voltage volts and current of $current amps.</p>";
    }
    ?>
</body>
</html>
