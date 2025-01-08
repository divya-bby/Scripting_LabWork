<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Find Largest Number</title>
</head>
<body>
    <h1>Find the Largest Number</h1>
    <form method="post">
        <label for="num1">Enter first number:</label>
        <input type="number" id="num1" name="num1" required><br><br>
        <label for="num2">Enter second number:</label>
        <input type="number" id="num2" name="num2" required><br><br>
        <label for="num3">Enter third number:</label>
        <input type="number" id="num3" name="num3" required><br><br>
        <button type="submit">Submit</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        function findLargest($num1, $num2, $num3) {
            if ($num1 >= $num2 && $num1 >= $num3) {
                return $num1;
            } elseif ($num2 >= $num1 && $num2 >= $num3) {
                return $num2;
            } else {
                return $num3;
            }
        }

        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $num3 = $_POST['num3'];

        $largest = findLargest($num1, $num2, $num3);
        echo "<p class='result'>The largest number among $num1, $num2, and $num3 is: $largest</p>";
    }
    ?>
</body>
</html>
