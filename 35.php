<!DOCTYPE html>
<html>
<head>
    <title>Simple Interest Calculator</title>
</head>
<body>
    <div class="calculator">
        <h2>Simple Interest</h2>
        <form method="POST" action="">
            <input type="number" name="principal" placeholder="Principal" required>
            <input type="number" 
            name="rate_of_interest" placeholder="Rate Of Interest" required>
            <input type="number" name="time" placeholder="Time (years)" required>
            <button type="submit" name="calculate">Calculate</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $principal = $_POST['principal'];
            $rate_of_interest = $_POST['rate_of_interest'];
            $time = $_POST['time'];
            $interest = null;
            $total_amount = null;

            if (is_numeric($principal) && is_numeric($rate_of_interest) && is_numeric($time)) {
                $interest = ($principal * $rate_of_interest * $time) / 100;
                $total_amount = $principal + $interest;
        ?>
                <div id="results">
                    
                    <p>Interest: <?php echo number_format($interest, 2); ?></p>
                    <p>Total Amount: <?php echo number_format($total_amount, 2); ?></p>
                </div>
        <?php
            }
        }
        ?>
    </div>
</body>
</html>
