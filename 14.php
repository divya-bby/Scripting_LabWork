<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Find String Index</title>
</head>
<body>
    <h1>Find the Index of a String in an Array</h1>
    <form method="post" action="">
        <label for="array">Enter the array:</label><br>
        <input type="text" id="array" name="array" required><br><br>
        
        <label for="search">Enter the string to search for:</label><br>
        <input type="text" id="search" name="search" required><br><br>
        
        <button type="submit">Find Index</button>
    </form>
    
    <?php
    function findStringIndex($array, $targetString) {
        foreach ($array as $index => $value) {
            if ($value === $targetString) {
                return $index;
            }
        }
        return -1; 
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $arrayInput = isset($_POST['array']) ? $_POST['array'] : '';
        $searchString = isset($_POST['search']) ? $_POST['search'] : '';

        $array = array_map('trim', explode(',', $arrayInput));

        $index = findStringIndex($array, $searchString);
        
        echo "<h2>Result:</h2>";
        if ($index !== -1) {
            echo "<p>The string '<strong>$searchString</strong>' is found at index <strong>$index</strong>.</p>";
        } else {
            echo "<p>The string '<strong>$searchString</strong>' is not found in the array.</p>";
        }
    }
    ?>
</body>
</html>
