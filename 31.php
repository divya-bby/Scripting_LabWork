<?php

$error_message = "";
$success_message = "";

function validate_email($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
}

function validate_phone($phone) {
    return preg_match("/^\d{10}$/", $phone);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $username = $_POST['username'];
    $email = $_POST['email'];
    $dob = $_POST['dob'];
    $phone = $_POST['phone'];

    if (strlen($username) < 8) {
        $error_message = "Username must be at least 8 characters long.";
    }
 
    elseif (!validate_email($email)) {
        $error_message = "Invalid email address.";
    }
    
    elseif (!strtotime($dob)) {
        $error_message = "Invalid date of birth.";
    }
    
    elseif (!validate_phone($phone)) {
        $error_message = "Phone number must be exactly 10 digits.";
    }
    
    else {
        
        session_start();
        $_SESSION['username'] = $username;
        $_SESSION['email'] = $email;
        $_SESSION['dob'] = $dob;
        $_SESSION['phone'] = $phone;

        $success_message = "Registration successful! Welcome, " . $username . ".";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
</head>
<body>

<h2>User Registration Form</h2>

<?php if ($error_message): ?>
    <p style="color: red;"><?php echo $error_message; ?></p>
<?php endif; ?>

<?php if ($success_message): ?>
    <p style="color: green;"><?php echo $success_message; ?></p>
<?php endif; ?>

<form action="31.php" method="POST">
    <label for="username">Username:</label>
    <input type="text" name="username" id="username" ><br><br>

    <label for="email">Email Address:</label>
    <input type="email" name="email" id="email" ><br><br>

    <label for="dob">Date of Birth (YYYY-MM-DD):</label>
    <input type="date" name="dob" id="dob" ><br><br>

    <label for="phone">Phone Number:</label>
    <input type="text" name="phone" id="phone" ><br><br>

    <input type="submit" value="Register">
</form>

</body>
</html>
