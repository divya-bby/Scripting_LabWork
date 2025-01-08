<?php
    require_once 'check_userlogin.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h4> Dashboard</h4>
    <a href="logout.php">LOGOUT</a>
    <?php require_once 'admin_menu.php' ?>
</body>
</html>