<?php
require 'config.php';
// var_dump($_POST)

if($_POST['full_name'] === ''){
	$_SESSION['flag'] = 'danger';
	$_SESSION['msg'] = "All fields must be filled!!!";
	header("location: ../leadershiptrainingform.php" );
	exit();
}

if($_POST['contact_address'] === ''){
	$_SESSION['flag'] = 'danger';
	$_SESSION['msg'] = "All fields must be filled!!!";
	header("location: ../leadershiptrainingform.php" );
	exit();
}


$sub = $db->insert('leadership_training_form', $_POST);
if($sub):
	$_SESSION['flag'] = 'success';
	$_SESSION['msg'] = "You have successfully registered for leadership training.";
	header("location: ../leadershiptrainingform.php" );
endif;