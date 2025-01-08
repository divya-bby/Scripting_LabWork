<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recursive String Length Calculator</title>
</head>
<body>
    <h1>Calculate Length of a String</h1>
    <form method="post" action="">
        <label for="string">Enter a string:</label>
        <input type="text" id="string" name="string" required>
        <br><br>
        <button type="submit">Calculate Length</button>
    </form>

    <?php
    function stringLength($str) {
        if ($str === "") {
            return 0;
        } else {
            return 1 + stringLength(substr($str, 1));
        }
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $string = $_POST['string'];
        $length = stringLength($string);
        echo "<p>The length of the string is: <strong>$length</strong></p>";
    }
    ?>
</body>
</html>
