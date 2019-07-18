<?php

require 'config.php';
var_dump($_POST);

if($_POST['scholarship_type'] === ''){
	$_SESSION['flag'] = 'danger';
	$_SESSION['msg'] = "All fields must be filled!!!";
	header("location: ../apply_for_scholarship.php" );
	exit();
}

if($_POST['full_name'] === ''){
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

if($_POST['religion'] === ''){
	$_SESSION['flag'] = 'danger';
	$_SESSION['msg'] = "All fields must be filled!!!";
	header("location: ../apply_for_scholarship.php" );
	exit();
}

if($_POST['marital_status'] === ''){
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

if($_POST['date_of_birth'] === ''){
	$_SESSION['flag'] = 'danger';
	$_SESSION['msg'] = "All fields must be filled!!!";
	header("location: ../apply_for_scholarship.php" );
	exit();
}

if($_POST['state_of_origin'] === ''){
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

if($_POST['islamic_organisation'] === ''){
	$_SESSION['flag'] = 'danger';
	$_SESSION['msg'] = "All fields must be filled!!!";
	header("location: ../apply_for_scholarship.php" );
	exit();
}

if($_POST['local_government_area_of_origin'] === ''){
	$_SESSION['flag'] = 'danger';
	$_SESSION['msg'] = "All fields must be filled!!!";
	header("location: ../apply_for_scholarship.php" );
	exit();
}


if($_POST['name_of_institution'] === ''){
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


if($_POST['official_website_of_institute'] === ''){
	$_SESSION['flag'] = 'danger';
	$_SESSION['msg'] = "All fields must be filled!!!";
	header("location: ../apply_for_scholarship.php" );
	exit();
}


if($_POST['certificate_obtained'] === ''){
	$_SESSION['flag'] = 'danger';
	$_SESSION['msg'] = "All fields must be filled!!!";
	header("location: ../apply_for_scholarship.php" );
	exit();
}

if($_POST['expected_year_of_program_completion'] === ''){
	$_SESSION['flag'] = 'danger';
	$_SESSION['msg'] = "All fields must be filled!!!";
	header("location: ../apply_for_scholarship.php" );
	exit();
}


if($_POST['contact_address_of_the_institution'] === ''){
	$_SESSION['flag'] = 'danger';
	$_SESSION['msg'] = "All fields must be filled!!!";
	header("location: ../apply_for_scholarship.php" );
	exit();
}

if($_POST['personal_statement'] === ''){
	$_SESSION['flag'] = 'danger';
	$_SESSION['msg'] = "All fields must be filled!!!";
	header("location: ../apply_for_scholarship.php" );
	exit();
}

$sub = $db->insert('applyforscholarship', $_POST);
if($sub):
	$_SESSION['flag'] = 'success';
	$_SESSION['msg'] = "Successful!";
	header("location: ../upload.php" );
endif;

