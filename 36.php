<?php
    $tax = null;
    $gender = '';
    $person_type = '';
    $annual_gross_salary = '';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_POST['calculate'])) {
            $gender = $_POST['gender'];
            $person_type = $_POST['person_type'];
            $annual_gross_salary = $_POST['annual_gross_salary'];

            $tax = 0;

            if ($person_type == 'un-married') {
                if ($annual_gross_salary <= 400000) {
                    $tax = $annual_gross_salary * 0.01;
                } elseif ($annual_gross_salary <= 500000) {
                    $tax = 400000 * 0.01 + ($annual_gross_salary - 400000) * 0.10;
                } elseif ($annual_gross_salary <= 750000) {
                    $tax = 400000 * 0.01 + 100000 * 0.10 + ($annual_gross_salary - 500000) * 0.20;
                } elseif ($annual_gross_salary <= 1300000) {
                    $tax = 400000 * 0.01 + 100000 * 0.10 + 250000 * 0.20 + ($annual_gross_salary - 750000) * 0.30;
                } else {
                    $tax = 400000 * 0.01 + 100000 * 0.10 + 250000 * 0.20 + 550000 * 0.30 + ($annual_gross_salary - 1300000) * 0.35;
                }
            } elseif ($person_type == 'married') {
                if ($annual_gross_salary <= 450000) {
                    $tax = $annual_gross_salary * 0.01;
                } elseif ($annual_gross_salary <= 550000) {
                    $tax = 450000 * 0.01 + ($annual_gross_salary - 450000) * 0.10;
                } elseif ($annual_gross_salary <= 750000) {
                    $tax = 450000 * 0.01 + 100000 * 0.10 + ($annual_gross_salary - 550000) * 0.20;
                } elseif ($annual_gross_salary <= 1300000) {
                    $tax = 450000 * 0.01 + 100000 * 0.10 + 200000 * 0.20 + ($annual_gross_salary - 750000) * 0.30;
                } else {
                    $tax = 450000 * 0.01 + 100000 * 0.10 + 200000 * 0.20 + 550000 * 0.30 + ($annual_gross_salary - 1300000) * 0.35;
                }
            }

            if ($gender == 'female') {
                $tax = $tax - $tax * 0.1;
            }
        } elseif (isset($_POST['reset'])) {
            $_POST = array();
            $gender = '';
            $person_type = '';
            $annual_gross_salary = '';
            $tax = null;
        }
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Nepalese Income Tax Calculator</title>
</head>
<body>
    <h1>Nepalese Income Tax Calculator</h1>
    <form method="post" action="">
        <label for="gender">Assessment Info:</label>
        <select id="gender" name="gender">
            <option value="male" <?php if ($gender == 'male') echo 'selected'; ?>>Male</option>
            <option value="female" <?php if ($gender == 'female') echo 'selected'; ?>>Female</option>
        </select>&nbsp;&nbsp;&nbsp;
        
        <label for="person_type">Couple Natural Person:</label>
        <select id="person_type" name="person_type">
            <option value="un-married" <?php if ($person_type == 'un-married') echo 'selected'; ?>>Un-married</option>
            <option value="married" <?php if ($person_type == 'married') echo 'selected'; ?>>Married</option>
        </select><br><br>
        
        <label for="annual_gross_salary">Annual Gross Salary (NPR):</label>
        <input type="number" id="annual_gross_salary" name="annual_gross_salary" value="<?php echo htmlspecialchars($annual_gross_salary); ?>" required>
        <br><br>
        
        <input type="submit" name="reset" value="Clear Inputs">
        <input type="submit" name="calculate" value="Calculate Tax">
       
    </form>

    <?php
        if ($tax !== null) {
            echo "<h2>Calculated Tax: NPR $tax</h2>";
        }
    ?>
</body>
</html>
