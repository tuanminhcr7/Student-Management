<?php
    include '../../connect.php';

    $this_id = $_GET['this_id'];

    $sql = "DELETE FROM student WHERE student.student_id='$this_id'";

    mysqli_query($conn, $sql);

    header('location: ../../layout/student/list_student.php');
?>