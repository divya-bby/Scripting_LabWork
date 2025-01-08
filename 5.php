<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Triangle Area Calculator</title>
</head>
<body>
    <h1>Calculate the Area of a Triangle</h1>
    <form method="post" action="">
        <label for="base">Enter base:</label>
        <input type="number" id="base" name="base" step="any" required>
        <br><br>
        <label for="height">Enter height:</label>
        <input type="number" id="height" name="height" step="any" required>
        <br><br>
        <button type="submit">Calculate Area</button>
    </form>

    <?php
    function calculateTriangleArea($base, $height) {
        return 0.5 * $base * $height;
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $base = $_POST['base'];
        $height = $_POST['height'];
        $area = calculateTriangleArea($base, $height);
        echo "<p>The area of the triangle with base $base and height $height is $area.</p>";
    }
    ?>
</body>
</html>
