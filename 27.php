<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <style>
        
        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        input[type="submit"] {
            padding: 10px;
            background: #28a745;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .error {
            color: red;
        }
    </style>
</head>
<body>

<h2>Login Form</h2>

<?php
session_start();

$error = ''; 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $username = 'divya';
    $password = 'divya123';

    
    $inputUsername = $_POST['username'];
    $inputPassword = $_POST['password'];

    
    if ($inputUsername === $username && $inputPassword === $password) {
        $_SESSION['login'] = true; 
        header("Location: dash.php"); 
        exit();
    } else {
        $error = 'Invalid username or password'; 
    }
}
?>

<form method="post" action="">
    <div class="error"><?php echo $error; ?></div>
    <input type="text" name="username" placeholder="Username" required>
    <input type="password" name="password" placeholder="Password" required>
    <input type="submit" value="Login">
</form>

</body>
</html>