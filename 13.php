<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Area Calculator for Triangle and Parallelogram</title>
</head>
<body>
    <h1>Calculate Area of Triangle or Parallelogram</h1>
    <form method="post" action="">
        <label for="base">Base:</label>
        <input type="number" id="base" name="base" required>
        <br><br>
        <label for="height">Height:</label>
        <input type="number" id="height" name="height" step="0.01" required>
        <br><br>
        <label for="shape">Shape:</label>
        <select id="shape" name="shape" required>
            <option value="triangle">Triangle</option>
            <option value="parallelogram">Parallelogram</option>
        </select>
        <br><br>
        <button type="submit">Calculate Area</button>
    </form>

    <?php
    function calculateArea($base, $height, $shape) {
        if ($shape === "triangle") {
            return 0.5 * $base * $height;
        } elseif ($shape === "parallelogram") {
            return $base * $height;
        } else {
            return "Invalid shape";
        }
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $base = floatval($_POST['base']);
        $height = floatval($_POST['height']);
        $shape = $_POST['shape'];

        $area = calculateArea($base, $height, $shape);

        echo "<p>The area of the $shape is: <strong>$area</strong></p>";
    }
    ?>
</body>
</html>
