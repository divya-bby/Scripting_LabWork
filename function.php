<?php
    function getNameByAdminId($admin_id)
    {
       
    $connection = mysql('localhost', 'root', '', 'youtube');

    if ($connection->connect_errno) {
        die('Database connection error: ' . $connection->connect_error);
    } 

    
    $sql = "SELECT name from admins WHERE id = $admin_id";
   
    $result = $connection->query($sql);
    
    
        $row = $result->fetch_assoc();
        return $row['name'];
    
    }
?>