<?php
    include '../../connect.php';

    session_start();
    
    if (isset($_SESSION['mySession'])) {
        header('location: ../../index.php');
    }
    
    if (isset($_POST['btn-login'])) {
        $userName = $_POST['txtUsername'];
        $passWord = md5($_POST['txtPassword']);
    
        $sql = "SELECT * FROM user WHERE user.user_name='$userName' AND user.user_password='$passWord'";
    
        $result = mysqli_query($conn, $sql);
        // print_r(mysqli_fetch_assoc($result));
        // die();
        if (mysqli_num_rows($result) == 1) {
           $user_logined = mysqli_fetch_assoc($result);
            $_SESSION['mySession'] = $user_logined;
            header('location: ../../index.php');
        } else {
            echo "Tài khoản hoặc mật khẩu không đúng!";
            header('location: ../../layout/system/login.php');
        }
    }
