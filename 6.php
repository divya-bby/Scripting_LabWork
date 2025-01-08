<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Age in Days Calculator</title>
</head>
<body>
    <h1>Calculate Age in Days</h1>
    <form method="post" action="">
        <label for="age">Enter age in years:</label>
        <input type="number" id="age" name="age" step="any" required>
        <br><br>
        <button type="submit">Calculate</button>
    </form>

    <?php
    function ageInDays($ageInYears) {
        return $ageInYears * 365;
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $ageInYears = $_POST['age'];
        $ageInDays = ageInDays($ageInYears);
        echo "<p>An age of $ageInYears years is approximately $ageInDays days.</p>";
    }
    ?>
</body>
</html>
