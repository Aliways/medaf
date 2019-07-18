<?php
require 'config.php';
// var_dump($_POST)
$db->insert('dev_camp', $_POST);


if($_POST['name'] === ''){
	$_SESSION['flag'] = 'danger';
	$_SESSION['msg'] = "All fields must be filled!!!";
	header("location: ../dev_camp.php" );
	exit();
}

if($_POST['course_of_study'] === ''){
	$_SESSION['flag'] = 'danger';
	$_SESSION['msg'] = "All fields must be filled!!!";
	header("location: ../dev_camp.php" );
	exit();
}

if($_POST['academic_level'] === ''){
	$_SESSION['flag'] = 'danger';
	$_SESSION['msg'] = "All fields must be filled!!!";
	header("location: ../dev_camp.php" );
	exit();
}

if($_POST['contact_address'] === ''){
	$_SESSION['flag'] = 'danger';
	$_SESSION['msg'] = "All fields must be filled!!!";
	header("location: ../dev_camp.php" );
	exit();
}


$sub = $db->insert('development_camp', $_POST);
if($sub):
	$_SESSION['flag'] = 'success';
	$_SESSION['msg'] = "You have successfully registered for Development Camp.";
	header("location: ../dev_camp.php" );
endif;