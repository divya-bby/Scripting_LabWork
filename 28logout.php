<?php
session_start();

session_unset();
session_destroy();


if (isset($_COOKIE['username'])) {
    setcookie("username", "", time() - 3600, "/");
}

header("Location: 28.php");
exit();
?>
