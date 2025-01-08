<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Absolute Difference</title>
</head>
<body>
    <h1>Compute Absolute Difference</h1>
    <form method="post" action="">
        <label for="number">Enter a number:</label><br>
        <input type="number" id="number" name="number" required><br><br>
        
        <button type="submit">Calculate</button>
    </form>
    
    <?php
    function computeDifference($n) {
        $difference = abs($n - 51); 
        if ($n > 51) {
            return 3 * $difference; 
        }
        return $difference;
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $number = isset($_POST['number']) ? (int)$_POST['number'] : 0;

        $result = computeDifference($number);

        echo "<h2>Result:</h2>";
        echo "<p>The result is: <strong>$result</strong></p>";
    }
    ?>
</body>
</html>
