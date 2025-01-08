<?php
function getNameByAdminId($admin_id)
{
    $connection = new mysqli('localhost', 'root', '', 'youtube');

    if ($connection->connect_errno) {
        die('Database connection error: ' . $connection->connect_error);
    } 

    $admin_id = $connection->real_escape_string($admin_id);
    $sql = "SELECT name FROM admins WHERE id = '$admin_id'";

    $result = $connection->query($sql);

    if ($result && $result->num_rows > 0) {
        $row = $result->fetch_assoc();
        return $row['name'];
    } else {
        return 'Unknown'; 
    }
}
?>
