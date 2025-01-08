<!DOCTYPE html>
<html>
<head>
    <title>Enter Marks</title>
</head>
<body>
    <h2>Student Marks Input</h2>
    <form method="POST" action="34marksheet.php">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" required><br><br>

        <label for="roll">Roll:</label>
        <input type="number" name="roll" id="roll" required><br><br>

        <label for="webtechii">Web Tech II:</label>
        <input type="number" name="webtechii" id="webtechii" min="0" max="100" required><br><br>

        <label for="dbms">DBMS:</label>
        <input type="number" name="dbms" id="dbms" min="0" max="100" required><br><br>

        <label for="economics">Economics:</label>
        <input type="number" name="economics" id="economics" min="0" max="100" required><br><br>

        <label for="dsa">DSA:</label>
        <input type="number" name="dsa" id="dsa" min="0" max="100" required><br><br>

        <label for="account">Account:</label>
        <input type="number" name="account" id="account" min="0" max="100" required><br><br>

        <button type="submit">Generate Marksheet</button>
    </form>
</body>
</html>
