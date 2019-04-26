<?php

require 'config.php';
var_dump($_POST);


if($_POST['name'] === ''){
	$_SESSION['flag'] = 'danger';
	$_SESSION['msg'] = "Fill all fields!!!";
	header("location: ../contact.php" );
	exit();
}

if($_POST['phone_number'] === ''){
	$_SESSION['flag'] = 'danger';
	$_SESSION['msg'] = "Fill all fields!!!";
	header("location: ../contact.php" );
	exit();
}

if($_POST['email'] === ''){
	$_SESSION['flag'] = 'danger';
	$_SESSION['msg'] = "Fill all fields!!!";
	header("location: ../contact.php" );
	exit();
}

if($_POST['message'] === ''){
	$_SESSION['flag'] = 'danger';
	$_SESSION['msg'] = "Fill all fields!!!";
	header("location: ../contact.php" );
	exit();
}

$sub = $db->insert('contact', $_POST);
if($sub):
	$_SESSION['flag'] = 'success';
	$_SESSION['msg'] = "You message has been sent. ";
	header("location: ../contact.php" );
endif;