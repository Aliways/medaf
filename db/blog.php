<?php

require 'config.php';
var_dump($_POST);


if($_POST['comment'] === ''){
	$_SESSION['flag'] = 'danger';
	$_SESSION['msg'] = "All fields must be filled!!!";
	header("location: ../blog.php" );
	exit();
}

if($_POST['name'] === ''){
	$_SESSION['flag'] = 'danger';
	$_SESSION['msg'] = "All fields must be filled!!!";
	header("location: ../blog.php" );
	exit();
}

if($_POST['email'] === ''){
	$_SESSION['flag'] = 'danger';
	$_SESSION['msg'] = "All fields must be filled!!!";
	header("location: ../blog.php" );
	exit();
}

$sub = $db->insert('blog', $_POST);
if($sub):
	$_SESSION['flag'] = 'success';
	$_SESSION['msg'] = "You comment has been sent.";
	header("location: ../blog.php" );
endif;