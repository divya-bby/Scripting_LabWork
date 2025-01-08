<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Football Team Points Calculator</title>
</head>
<body>
    <h1>Calculate Total Football Points</h1>
    <form method="post" action="">
        <label for="wins">Number of Wins:</label>
        <input type="number" id="wins" name="wins" min="0" required>
        <br><br>
        <label for="draws">Number of Draws:</label>
        <input type="number" id="draws" name="draws" min="0" required>
        <br><br>
        <label for="losses">Number of Losses:</label>
        <input type="number" id="losses" name="losses" min="0" required>
        <br><br>
        <button type="submit">Calculate Points</button>
    </form>

    <?php
    function calculatePoints($wins, $draws, $losses) {
        
        $points = ($wins * 3) + ($draws * 1) + ($losses * 0);
        return $points;
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
       
        $wins = intval($_POST['wins']);
        $draws = intval($_POST['draws']);
        $losses = intval($_POST['losses']);
        
        
        $totalPoints = calculatePoints($wins, $draws, $losses);

       
        echo "<p>The total points from the games are: $totalPoints points.</p>";
    }
    ?>
</body>
</html>
