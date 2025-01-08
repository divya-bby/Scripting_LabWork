<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String Manipulation</title>
</head>
<body>
    <h1>Generate 4 Copies of the First 2 Characters</h1>
    <form method="post" action="">
        <label for="inputString">Enter a string:</label><br>
        <input type="text" id="inputString" name="inputString" required><br><br>
        
        <button type="submit">Submit</button>
    </form>
    
    <?php
    function generateNewString($string) {
        if (strlen($string) < 2) {
            return $string; 
        }
        $front = substr($string, 0, 2); 
        return str_repeat($front, 4); 
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $inputString = isset($_POST['inputString']) ? $_POST['inputString'] : '';

        $result = generateNewString($inputString);

        echo "<h2>Result:</h2>";
        echo "<p>The new string is: <strong>$result</strong></p>";
    }
    ?>
</body>
</html>
