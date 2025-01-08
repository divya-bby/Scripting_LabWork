<?php
require '../db.php';

$id = $_GET['id'];
$connection->query("DELETE FROM courses WHERE id = $id");
header('Location: ../index.php');
?>
