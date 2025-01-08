<?php
session_start();

if (isset($_SESSION['username'])) {
    header("Location: 28welcome.php");
    exit();
}


$message = "";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];


    $valid_username = "divya";
    $valid_password = "divya123";

    if ($username == $valid_username && $password == $valid_password) {
        $_SESSION['username'] = $username;

        if (isset($_POST['remember'])) {
            setcookie("username", $username, time() + 3600, "/");
        }

        header("Location: 28welcome.php");
        exit();
    } else {
        $message = "Invalid username or password!";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h2>Login Form</h2>
    <?php if ($message) echo "<p style='color: red;'>$message</p>"; ?>
    <form method="POST" action="">
        <label for="username">Username:</label>
        <input type="text" name="username" id="username" required><br><br>

        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required><br><br>

        <label for="remember">
            <input type="checkbox" name="remember" id="remember"> Remember Me
        </label><br><br>

        <button type="submit">Login</button>
    </form>
</body>
</html>
