<?php
session_start();

require_once '../../connect.php';

if (isset($_POST['btn-add'])) {
    $student_code = $_POST['txtStudentCode'] ?? '';
    $student_image = $_FILES['studentImage']['name'] ?? '';
    $student_image_tmp_name = $_FILES['studentImage']['tmp_name'] ?? '';
    $student_name = $_POST['txtStudentName'] ?? '';
    $student_class = $_POST['txtStudentClass'] ?? '';

    if (empty($student_code) || empty($student_name)) {
        header('location: ../../layout/student/add_student.php');
    } else {
        $sql = "INSERT INTO student(student_code, student_image, student_name, student_class) ";
        $sql .= "VALUES('$student_code', '$student_image', '$student_name', '$student_class')";

        mysqli_query($conn, $sql);
        move_uploaded_file($student_image_tmp_name, '../../libraries/images/' . $student_image);

        header('location: ../../layout/student/list_student.php');
    }
}
