<?php
require 'config.php';
// var_dump($_POST)
// $db->insert('read_2_lead_form', $_POST);

if($_POST['full_name'] === ''){
	$_SESSION['flag'] = 'danger';
	$_SESSION['msg'] = "All fields must be filled!!!";
	header("location: ../read2leadform.php" );
	exit();
}

if($_POST['phone_number'] === ''){
	$_SESSION['flag'] = 'danger';
	$_SESSION['msg'] = "All fields must be filled!!!";
	header("location: ../read2leadform.php" );
	exit();
}

if($_POST['email'] === ''){
	$_SESSION['flag'] = 'danger';
	$_SESSION['msg'] = "All fields must be filled!!!";
	header("location: ../read2leadform.php" );
	exit();
}

if($_POST['gender'] === ''){
	$_SESSION['flag'] = 'danger';
	$_SESSION['msg'] = "All fields must be filled!!!";
	header("location: ../read2leadform.php" );
	exit();
}

$sub = $db->insert('read_2_lead_form', $_POST);
if($sub):
	$_SESSION['flag'] = 'success';
	$_SESSION['msg'] = "You 've successfully registered for Register for Read 2Lead Challenge!";
	header("location: ../read2leadform.php" );
endif;