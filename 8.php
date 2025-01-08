<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animal Legs Calculator</title>
</head>
<body>
    <h1>Calculate Total Number of Legs</h1>
    <form method="post" action="">
        <label for="chickens">Number of Chickens:</label>
        <input type="number" id="chickens" name="chickens" min="0" required>
        <br><br>
        <label for="cows">Number of Cows:</label>
        <input type="number" id="cows" name="cows" min="0" required>
        <br><br>
        <label for="pigs">Number of Pigs:</label>
        <input type="number" id="pigs" name="pigs" min="0" required>
        <br><br>
        <button type="submit">Calculate Legs</button>
    </form>

    <?php
    function calculateTotalLegs($chickens, $cows, $pigs) {
        $chickenLegs = $chickens * 2; 
        $cowLegs = $cows * 4;       
        $pigLegs = $pigs * 4;        
        return $chickenLegs + $cowLegs + $pigLegs;
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $chickens = intval($_POST['chickens']);
        $cows = intval($_POST['cows']);
        $pigs = intval($_POST['pigs']);

        
        $totalLegs = calculateTotalLegs($chickens, $cows, $pigs);

       
        echo "<p>The total number of legs among all the animals is <strong>$totalLegs</strong>.</p>";
    }
    ?>
</body>
</html>
