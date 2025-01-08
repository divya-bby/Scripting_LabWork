<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Divisible by 5 Checker</title>
</head>
<body>
    <h1>Check if a Number is Divisible by 5</h1>
    <form method="post" action="">
        <label for="number">Enter a number:</label>
        <input type="number" id="number" name="number" required>
        <br><br>
        <button type="submit">Check</button>
    </form>

    <?php
    function isDivisibleByFive($number) {
        return $number % 5 === 0;
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $number = intval($_POST['number']);
        
        $result = isDivisibleByFive($number);
        
        echo "<p>The number " . ($result ? "is" : "is not") . " divisible by 5.</p>";
    }
    ?>
</body>
</html>
