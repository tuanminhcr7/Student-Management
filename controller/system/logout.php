<?php

session_start();

if (isset($_SESSION['mySession'])) {
	unset($_SESSION['mySession']);
}

header('location: ../../layout/system/login.php');
?>