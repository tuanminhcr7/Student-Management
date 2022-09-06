<?php

require_once '../../connect.php';

$this_id = $_GET['this_id'];

$sql = "SELECT * FROM student WHERE student.student_id='$this_id'";
$query = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($query);

if (isset($_POST['btn-edit'])) {
    $student_image = $_FILES['studentImage']['name'];
    $student_image_tmp_name = $_FILES['studentImage']['tmp_name'];
    $student_name = $_POST['txtStudentName'];
    $student_class = $_POST['txtStudentClass'];

    if (empty($student_name)) {
        header('location: ../../layout/student/edit_student.php?this_id=' . $this_id);
    } else {
        if ($student_image == '') {
            $sql = "UPDATE student ";
            $sql .= "SET student_image='" . $row['student_image'] . "', ";
            $sql .= "student_name='$student_name', student_class= '$student_class' ";
            $sql .= "WHERE student.student_id='$this_id'";
        } else {
            $sql = "UPDATE student ";
            $sql .= "SET student_image='" . $student_image . "', ";
            $sql .= "student_name='$student_name', student_class= '$student_class'";
            $sql .= "WHERE student.student_id='$this_id'";
        }
    }
    mysqli_query($conn, $sql);
    move_uploaded_file($student_image_tmp_name, '../../libraries/images/' . $student_image);

    header('location: ../../layout/student/list_student.php');
}
