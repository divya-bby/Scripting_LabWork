<?php
function getCourses($connection) {
    $sql = "SELECT * FROM courses";
    return $connection->query($sql);
}

function getStudents($connection) {
    $sql = "SELECT students.*, courses.title AS course_name 
            FROM students 
            LEFT JOIN courses ON students.course_id = courses.id";
    return $connection->query($sql);
}
?>
