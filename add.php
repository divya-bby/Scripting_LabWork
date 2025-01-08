<?php
require '../db.php';

if (isset($_POST['submit'])) {
    $title = $_POST['title'];
    $duration = $_POST['duration'];
    $status = $_POST['status'];

    $sql = "INSERT INTO courses (title, duration, status) VALUES ('$title', '$duration', '$status')";
    $connection->query($sql);
    header('Location: ../index.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Course</title>
</head>
<body>
    <h1>Add Course</h1>
    <form method="POST">
        <input type="text" name="title" placeholder="Course Title" required>
        <input type="number" name="duration" placeholder="Duration (in months)" required>
        <select name="status">
            <option value="1">Active</option>
            <option value="0">Inactive</option>
        </select>
        <button type="submit" name="submit">Add</button>
    </form>
</body>
</html>
