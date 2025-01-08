<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sum of Two Numbers</title>
</head>
<body>
    <h1>Calculate the Sum of Two Numbers</h1>
    <form method="post" action="">
        <label for="num1">Enter first number:</label>
        <input type="number" id="num1" name="num1" required>
        <br><br>
        <label for="num2">Enter second number:</label>
        <input type="number" id="num2" name="num2" required>
        <br><br>
        <button type="submit">Calculate</button>
    </form>

    <?php
    function addNumbers($num1, $num2) {
        return $num1 + $num2;
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $sum = addNumbers($num1, $num2);
        echo "<p>The sum of $num1 and $num2 is $sum.</p>";
    }
    ?>
</body>
</html>
