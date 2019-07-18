<?php
require 'config.php';
var_dump($_POST);

if($_POST['email'] === ''){
	$_SESSION['flag'] = 'danger';
	$_SESSION['msg'] = "All fields must be filled!!!";
	header("location: ../nav.php" );
	exit();
}

if($_POST['password'] === ''){
	$_SESSION['flag'] = 'danger';
	$_SESSION['msg'] = "All fields must be filled!!!";
	header("location: ../nav.php" );
	exit();
}

if($_POST['scholarship_type'] === ''){
	$_SESSION['flag'] = 'danger';
	$_SESSION['msg'] = "All fields must be filled!!!";
	header("location: ../nav.php" );
	exit();
}



$sub = $db->insert('login', $_POST);
if($sub):
	$_SESSION['flag'] = 'success';
	$_SESSION['msg'] = "You have successfully logged in!";
	header("location: ../index.php" );
endif;
