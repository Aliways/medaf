<?php

require 'config.php';
var_dump($_POST);

$email = $_POST['email'];
$password = $_POST['password'];

$check = $db->select('scholarship', '*', ['email'=>$email]);

if($password === $check['password']){
	echo 'Password Correct';
}else{
	echo "Password incorrect";
}