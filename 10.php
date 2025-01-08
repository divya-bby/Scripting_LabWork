<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String Length Comparator</title>
</head>
<body>
    <h1>Check if Two Strings Have Equal Length</h1>
    <form method="post" action="">
        <label for="string1">Enter the first string:</label>
        <input type="text" id="string1" name="string1" required>
        <br><br>
        <label for="string2">Enter the second string:</label>
        <input type="text" id="string2" name="string2" required>
        <br><br>
        <button type="submit">Check Lengths</button>
    </form>

    <?php
    function areStringsEqualLength($string1, $string2) {
        return strlen($string1) === strlen($string2);
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $string1 = $_POST['string1'];
        $string2 = $_POST['string2'];

        $result = areStringsEqualLength($string1, $string2);

        echo "<p>The strings are " . ($result ? "equal" : "not equal") . " in length.</p>";
    }
    ?>
</body>
</html>
