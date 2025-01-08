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
        function addLastCharFrontAndBack($input) {          
            if (strlen($input) >= 1) {
                $lastChar = substr($input, -1);
                $newString = $lastChar . $input . $lastChar;
                return $newString;
            } else {
                return "Input string must have a length of 1 or more.";
            }
        }

        $inputString = $_POST['inputString'];
        $result = addLastCharFrontAndBack($inputString);
        echo "<p>Original string: <strong>$inputString</strong></p>";
        echo "<p class='result'>New string: $result</p>";
    }
    ?>
</body>
</html>
