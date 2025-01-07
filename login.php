<?php

$username = $_POST['username'];
$password = $_POST['password'];

if ($username === "divya" && $password === "divya123") {
    echo "valid";
} else {
    echo "invalid";
}
?>
