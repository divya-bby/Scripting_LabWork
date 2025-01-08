<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add 'if' to String</title>
</head>
<body>
    <h1>Add 'if' to the Front of a String</h1>
    <form method="post" action="">
        <label for="inputString">Enter a string:</label><br>
        <input type="text" id="inputString" name="inputString" required><br><br>
        
        <button type="submit">Submit</button>
    </form>
    
    <?php
    function addIfToFront($string) {
        if (strpos($string, 'if') === 0) { 
            return $string;
        }
        return 'if ' . $string; 
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $inputString = isset($_POST['inputString']) ? trim($_POST['inputString']) : '';

        $result = addIfToFront($inputString);

        echo "<h2>Result:</h2>";
        echo "<p>The new string is: <strong>$result</strong></p>";
    }
    ?>
</body>
</html>
