<?php

require 'config.php';
var_dump($_POST);


if($_POST['email_address'] === ''){
	$_SESSION['flag'] = 'danger';
	$_SESSION['msg'] = "Email is required for this action!!!";
	header("location: ../index.php" );
	exit();
}

$sub = $db->insert('newsletter', $_POST);
if($sub):
	$_SESSION['flag'] = 'success';
	$_SESSION['msg'] = "You have successfully subscribed to our newsletter. ";
	header("location: ../index.php" );
endif;