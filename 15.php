<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get Value by Index</title>
</head>
<body>
    <h1>Find the Value at a Specific Index</h1>
    <form method="post" action="">
        <label for="array">Enter the array:</label><br>
        <input type="text" id="array" name="array" required><br><br>
        
        <label for="index">Enter the index to look up:</label><br>
        <input type="number" id="index" name="index" required><br><br>
        
        <button type="submit">Find Value</button>
    </form>
    
    <?php
    function getValueByIndex($array, $index) {
        if (isset($array[$index])) {
            return $array[$index];
        } else {
            return "Invalid index: $index. Index is out of bounds.";
        }
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $arrayInput = isset($_POST['array']) ? $_POST['array'] : '';
        $index = isset($_POST['index']) ? (int)$_POST['index'] : -1;

        $array = array_map('trim', explode(',', $arrayInput));

         $value = getValueByIndex($array, $index);

        echo "<h2>Result:</h2>";
        echo "<p>$value</p>";
    }
    ?>
</body>
</html>
