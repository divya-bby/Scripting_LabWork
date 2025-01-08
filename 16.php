<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Calculator</title>
</head>
<body>
    <h1>Calculate Cars Needed</h1>
    <form method="post" action="">
        <label for="people">Enter the number of people:</label><br>
        <input type="number" id="people" name="people" min="0" required><br><br>
        
        <button type="submit">Calculate</button>
    </form>
    
    <?php
    function calculateCarsNeeded($numberOfPeople) {
        $seatsPerCar = 5;
        return ceil($numberOfPeople / $seatsPerCar);
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $people = isset($_POST['people']) ? (int)$_POST['people'] : 0;

        if ($people < 0) {
            echo "<h2>Error:</h2><p>The number of people cannot be negative.</p>";
        } else {
            $carsNeeded = calculateCarsNeeded($people);
            echo "<h2>Result:</h2>";
            echo "<p>For $people people, you will need <strong>$carsNeeded</strong> car(s).</p>";
        }
    }
    ?>
</body>
</html>
