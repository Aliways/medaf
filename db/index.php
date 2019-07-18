<?php

require 'config.php';
var_dump($_POST);


if($_POST['email_address'] === ''){
	$_SESSION['flag'] = 'danger';
	$_SESSION['msg'] = "All fields must be filled!!!";
	header("location: ../index.php" );
	exit();
}


$sub = $db->insert('index', $_POST);
if($sub):
	$_SESSION['flag'] = 'success';
	$_SESSION['msg'] = "You have successfully subscribed for our newsletter.";
	header("location: ../index.php" );
endif;