<?php

require_once '../../connect.php';
$curr = 10;
$start = 1;
$end = 10;

if (isset($_GET['page'])) {

    $end = $curr * (int)$_GET['page'];
    $start = $curr * (int)$_GET['page'] - 10 + 1;
}
$where ='';
$default = '';
if (isset($_GET['search'])) {
    $default = $_GET['search'];
    $where = "WHERE student_name LIKE '%" . $_GET['search'] . "%'";
    
}

$sql = "SELECT * FROM student ".$where;
$sql .= "ORDER BY student_id DESC  LIMIT " . $start . ", " . $end . "";

$sql_page = "SELECT * FROM student " . $where;
$sql_page .= "ORDER BY student_id DESC";

$list_student = mysqli_query($conn, $sql);
$list_student_by_page = mysqli_query($conn, $sql_page);


$number_of_result = mysqli_num_rows($list_student_by_page);

$number_of_page = ceil($number_of_result / $curr);
