<?php
$connection = new mysqli('localhost', 'root', '', 'school');

if ($connection->connect_errno) {
    die('Database connection failed: ' . $connection->connect_error);
}
?>
