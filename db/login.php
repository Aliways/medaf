<?php
require 'config.php';
// var_dump($_POST);

// if($_POST['email'] === ''){
// 	$_SESSION['flag'] = 'danger';
// 	$_SESSION['msg'] = "All fields must be filled!!!";
// 	header("location: ../nav.php" );
// 	exit();
// }

// if($_POST['password'] === ''){
// 	$_SESSION['flag'] = 'danger';
// 	$_SESSION['msg'] = "All fields must be filled!!!";
// 	header("location: ../nav.php" );
// 	exit();
// }

// if($_POST['scholarship_type'] === ''){
// 	$_SESSION['flag'] = 'danger';
// 	$_SESSION['msg'] = "All fields must be filled!!!";
// 	header("location: ../nav.php" );
// 	exit();
// }

//This code will check if the login inputs are empty
foreach ($_POST as $key => $value) {
	# code...
	if($_POST["$key"] == ''){
		$_SESSION['flag'] = 'danger';
		$_SESSION['msg'] = ucfirst($key)." field is required!!!";
		header('location: ../index.php');
		exit();
	}
}

$table = 'scholarship';
$column = '*';
$where = ['email'=>$_POST['email'], 'password'=>$_POST['password']];

$userdata = $db->select($table, $column, $where);

// var_dump($userdata);

if($userdata){
	$_SESSION['flag'] = 'success';
	$_SESSION['msg'] = "You have successfully logged in!";
	header("location: ../index.php" );
}else{
	$_SESSION['flag'] = 'danger';
	$_SESSION['msg'] = "User Does Not Exist!";
	header("location: ../index.php" );
}

// $sub = $db->insert('login', $_POST);
// if($sub):
// 	$_SESSION['flag'] = 'success';
// 	$_SESSION['msg'] = "You have successfully logged in!";
// 	header("location: ../index.php" );
// endif;
