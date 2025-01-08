<?php
require '../db.php';

$id = $_GET['id'];
$result = $connection->query("SELECT * FROM courses WHERE id = $id");
$course = $result->fetch_assoc();

if (isset($_POST['submit'])) {
    $title = $_POST['title'];
    $duration = $_POST['duration'];
    $status = $_POST['status'];

    $sql = "UPDATE courses SET title='$title', duration='$duration', status='$status' WHERE id='$id'";
    $connection->query($sql);
    header('Location: ../index.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Course</title>
</head>
<body>
    <h1>Edit Course</h1>
    <form method="POST">
        <input type="text" name="title" value="<?= $course['title'] ?>" required>
        <input type="number" name="duration" value="<?= $course['duration'] ?>" required>
        <select name="status">
            <option value="1" <?= $course['status'] ? 'selected' : '' ?>>Active</option>
            <option value="0" <?= !$course['status'] ? 'selected' : '' ?>>Inactive</option>
        </select>
        <button type="submit" name="submit">Update</button>
    </form>
</body>
</html>
