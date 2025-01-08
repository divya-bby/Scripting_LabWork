<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Circle Area Calculator</title>
</head>
<body>
    <h1>Calculate the Area of a Circle</h1>
    <form method="POST" action="">
        <label for="radius">Enter the radius of the circle:</label>
        <input type="number"  name="radius" id="radius" required>
        <button type="submit">Calculate</button>
    </form>

    <?php
    
    define("PI", 3.14159);

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
       
        $radius = $_POST['radius'];

        
        $area = PI * pow($radius, 2);

        
        echo "<h2>Result:</h2>";
        echo "<p>The area of the circle with radius $radius is: " . number_format($area, 2) . "</p>";
    }
    ?>
</body>
</html>
