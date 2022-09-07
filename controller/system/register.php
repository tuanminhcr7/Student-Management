<?php
include '../../connect.php';

session_start();

if (isset($_SESSION['mySession'])) {
    header('location: ../../index.php');
}

$txt_error = '';

if (isset($_POST['btn-register'])) {
    $userId = "";
    $userFullname = $_POST['txtFullname'];
    $userName = $_POST['txtUsername'];
    $userPassword = md5($_POST['txtPassword']);
    $retypePassword = md5($_POST['txtRetypePassword']);
    // $level = 2;

    if (empty($userName) || empty($userPassword) || empty($retypePassword)) {
        $txt_error = 'The Information marked with * is not empty';
        header('location: ../../layout/system/register.php');
    } else {
        if ($userPassword == $retypePassword) {
            $sql = "INSERT INTO user (user_id, user_name, user_password, user_fullname)";
            $sql .= "VALUES ('$userId', '$userName', '$userPassword', '$userFullname')";

            mysqLi_query($conn, $sql);

            header('location: ../../layout/system/login.php');
        } else {
            header('location: ../../layout/system/register.php');
        }
    }
}
