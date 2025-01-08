<?php
require '../db.php';

// Fetch all courses
$sql = "SELECT * FROM courses";
$courses = $connection->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Courses</title>
</head>
<body>
    <h1>Course List</h1>
    <a href="../index.php">Back to Dashboard</a>
    <a href="add.php">Add Course</a>
    <table border="1" cellpadding="5" cellspacing="0">
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Duration</th>
            <th>Status</th>
            <th>Actions</th>
        </tr>
        <?php while ($course = $courses->fetch_assoc()) { ?>
            <tr>
                <td><?= $course['id'] ?></td>
                <td><?= $course['title'] ?></td>
                <td><?= $course['duration'] ?></td>
                <td><?= $course['status'] ? 'Active' : 'Inactive' ?></td>
                <td>
                    <a href="edit.php?id=<?= $course['id'] ?>">Edit</a>
                    <a href="delete.php?id=<?= $course['id'] ?>">Delete</a>
                </td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>

