<?php
require 'config.php';
// var_dump($_POST)
// $db->insert('training_form', $_POST);

if($_POST['full_name'] === ''){
	$_SESSION['flag'] = 'danger';
	$_SESSION['msg'] = "All fields must be filled!!!";
	header("location: ../trainingform.php" );
	exit();
}

if($_POST['contact_address'] === ''){
	$_SESSION['flag'] = 'danger';
	$_SESSION['msg'] = "All fields must be filled!!!";
	header("location: ../trainingform.php" );
	exit();
}


$sub = $db->insert('training_form', $_POST);
if($sub):
	$_SESSION['flag'] = 'success';
	$_SESSION['msg'] = "Submitted!";
	header("location: ../trainingform.php" );
endif;