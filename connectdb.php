<?php
    $connection = new mysqli('localhost', 'root', '', 'youtube');

    if ($connection->connect_errno) {
        die('Database connection error: ' . $connection->connect_error);
    } 
?>