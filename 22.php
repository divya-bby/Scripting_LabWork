<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modify String</title>
</head>
<body>
    <h1>String Modification</h1>
    <form method="post">
        <label for="inputString">Enter a string:</label>
        <input type="text" id="inputString" name="inputString" required>
        <button type="submit">Submit</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        function addFirstThreeCharsFrontAndBack($input) {
            $prefix = strlen($input) < 3 ? $input : substr($input, 0, 3);
            $newString = $prefix . $input . $prefix;
            return $newString;
        }

        $inputString = $_POST['inputString'];
        $result = addFirstThreeCharsFrontAndBack($inputString);
        echo "<p>Original string: <strong>$inputString</strong></p>";
        echo "<p class='result'>New string: $result</p>";
    }
    ?>
</body>
</html>
