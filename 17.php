<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sum or Triple Sum</title>
</head>
<body>
    <h1>Compute the Sum or Triple the Sum</h1>
    <form method="post" action="">
        <label for="num1">Enter the first integer:</label><br>
        <input type="number" id="num1" name="num1" required><br><br>
        
        <label for="num2">Enter the second integer:</label><br>
        <input type="number" id="num2" name="num2" required><br><br>
        
        <button type="submit">Calculate</button>
    </form>
    
    <?php
    function computeSumOrTriple($num1, $num2) {
        $sum = $num1 + $num2;
        if ($num1 === $num2) {
            return 3 * $sum;
        }
        return $sum;
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $num1 = isset($_POST['num1']) ? (int)$_POST['num1'] : 0;
        $num2 = isset($_POST['num2']) ? (int)$_POST['num2'] : 0;

        $result = computeSumOrTriple($num1, $num2);

        echo "<h2>Result:</h2>";
        echo "<p>The result is: $result</p>";
    }
    ?>
</body>
</html>
