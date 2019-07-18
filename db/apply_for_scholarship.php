<?php

require 'config.php';
var_dump($_POST);


if($_POST['fullname'] === ''){
	$_SESSION['flag'] = 'danger';
	$_SESSION['msg'] = "All fields must be filled!!!";
	header("location: ../apply_for_scholarship.php" );
	exit();
}

if($_POST['gender'] === ''){
	$_SESSION['flag'] = 'danger';
	$_SESSION['msg'] = "All fields must be filled!!!";
	header("location: ../apply_for_scholarship.php" );
	exit();
}

if($_POST['email'] === ''){
	$_SESSION['flag'] = 'danger';
	$_SESSION['msg'] = "All fields must be filled!!!";
	header("location: ../apply_for_scholarship.php" );
	exit();
}

if($_POST['course_of_study'] === ''){
	$_SESSION['flag'] = 'danger';
	$_SESSION['msg'] = "All fields must be filled!!!";
	header("location: ../apply_for_scholarship.php" );
	exit();
}

if($_POST['area_of_interest'] === ''){
	$_SESSION['flag'] = 'danger';
	$_SESSION['msg'] = "All fields must be filled!!!";
	header("location: ../apply_for_scholarship.php" );
	exit();
}

if($_POST['location'] === ''){
	$_SESSION['flag'] = 'danger';
	$_SESSION['msg'] = "All fields must be filled!!!";
	header("location: ../apply_for_scholarship.php" );
	exit();
}

if($_POST['level_of_competence'] === ''){
	$_SESSION['flag'] = 'danger';
	$_SESSION['msg'] = "All fields must be filled!!!";
	header("location: ../apply_for_scholarship.php" );
	exit();
}

if($_POST['phone_number'] === ''){
	$_SESSION['flag'] = 'danger';
	$_SESSION['msg'] = "All fields must be filled!!!";
	header("location: ../apply_for_scholarship.php" );
	exit();
}

if($_POST['home_address'] === ''){
	$_SESSION['flag'] = 'danger';
	$_SESSION['msg'] = "All fields must be filled!!!";
	header("location: ../apply_for_scholarship.php" );
	exit();
}
$sub = $db->insert('scholarship', $_POST);
if($sub):
	$_SESSION['flag'] = 'success';
	$_SESSION['msg'] = "You have successfully registered for MEDAF scholarship.<br> Kindly upload your document.";
	header("location: ../upload.php" );
endif;