<?php

//require 'config.php';
//var_dump($_POST);
//$db->insert('scholarship', $_POST);


// require 'config.php';
// var_dump($_POST);

$db = mysqli_connect("localhost","root","","medaf");
if(!$db){
	die('Database not Found!!!').mysqli_error();
}

if(isset($_POST['submit'])){
	$sql = "INSERT INTO scholarship (`id`, `scholarship_type`, `full_name`, `gender`, `religion`, `marital_status`, `email`, `password`, `date_of_birth`, `state_of_origin`, `phone_number`, `islamic_organisation`, `local_government_area_of_origin`, `home_address`, `contact_address_of_islamic_organisation`, `postal_address`, `name_of_institution`, `course_of_study`, `official_website_of_institute`, `certificate_obtained`, `expected_year_of_program_completion`, `contact_address_of_the_institution`, `personal_statement`) VALUES (NULL,'".$_POST['scholarship_type']."','".$_POST['full_name']."','".$_POST['gender']."','".$_POST['religion']."','".$_POST['marital_status']."','".$_POST['email']."','".$_POST['password']."','".$_POST['date_of_birth']."','".$_POST['state_of_origin']."','".$_POST['phone_number']."','".$_POST['islamic_organisation']."','".$_POST['local_government_area_of_origin']."','".$_POST['home_address']."','".$_POST['name_of_institution']."','".$_POST['course_of_study']."','".$_POST['official_website_of_the_institution']."','".$_POST['certificate_obtained']."','".$_POST['expected_year_of_program_completion']."','".$_POST['contact_address_of_islamic_organisation']."','".$_POST['personal_statement']."','".$_POST['postal_address']."','".$_POST['contact_address_of_the_institution']."')";


	//echo $sql;
	
	$query = mysqli_query($db,$sql);
	if($query){
		
		header("location: ../upload.php");
		
	}
	
}




// if($_POST['scholarship_type'] === ''){
// 	$_SESSION['flag'] = 'danger';
// 	$_SESSION['msg'] = "All fields must be filled!!!";
// 	header("location: ../apply_for_scholarship.php" );
// 	exit();
// }

// if($_POST['full_name'] === ''){
// 	$_SESSION['flag'] = 'danger';
// 	$_SESSION['msg'] = "All fields must be filled!!!";
// 	header("location: ../apply_for_scholarship.php" );
// 	exit();
// }

// if($_POST['gender'] === ''){
// 	$_SESSION['flag'] = 'danger';
// 	$_SESSION['msg'] = "All fields must be filled!!!";
// 	header("location: ../apply_for_scholarship.php" );
// 	exit();
// }

// if($_POST['religion'] === ''){
// 	$_SESSION['flag'] = 'danger';
// 	$_SESSION['msg'] = "All fields must be filled!!!";
// 	header("location: ../apply_for_scholarship.php" );
// 	exit();
// }


// if($_POST['marital_status'] === ''){
// 	$_SESSION['flag'] = 'danger';
// 	$_SESSION['msg'] = "All fields must be filled!!!";
// 	header("location: ../apply_for_scholarship.php" );
// 	exit();
// }


// if($_POST['email'] === ''){
// 	$_SESSION['flag'] = 'danger';
// 	$_SESSION['msg'] = "All fields must be filled!!!";
// 	header("location: ../apply_for_scholarship.php" );
// 	exit();
// }


// if($_POST['password'] === ''){
// 	$_SESSION['flag'] = 'danger';
// 	$_SESSION['msg'] = "All fields must be filled!!!";
// 	header("location: ../apply_for_scholarship.php" );
// 	exit();
// }


// if($_POST['date_of_birth'] === ''){
// 	$_SESSION['flag'] = 'danger';
// 	$_SESSION['msg'] = "All fields must be filled!!!";
// 	header("location: ../apply_for_scholarship.php" );
// 	exit();
// }
// if($_POST['state_of_origin'] === ''){
// 	$_SESSION['flag'] = 'danger';
// 	$_SESSION['msg'] = "All fields must be filled!!!";
// 	header("location: ../apply_for_scholarship.php" );
// 	exit();
// }

// if($_POST['phone_number'] === ''){
// 	$_SESSION['flag'] = 'danger';
// 	$_SESSION['msg'] = "All fields must be filled!!!";
// 	header("location: ../apply_for_scholarship.php" );
// 	exit();
// }

// if($_POST['islamic_organisation'] === ''){
// 	$_SESSION['flag'] = 'danger';
// 	$_SESSION['msg'] = "All fields must be filled!!!";
// 	header("location: ../apply_for_scholarship.php" );
// 	exit();
// }

// if($_POST['local_government_area_of_origin'] === ''){
// 	$_SESSION['flag'] = 'danger';
// 	$_SESSION['msg'] = "All fields must be filled!!!";
// 	header("location: ../apply_for_scholarship.php" );
// 	exit();
// }

// if($_POST['home_address'] === ''){
// 	$_SESSION['flag'] = 'danger';
// 	$_SESSION['msg'] = "All fields must be filled!!!";
// 	header("location: ../apply_for_scholarship.php" );
// 	exit();
// }
// if($_POST['name_of_institution'] === ''){
// 	$_SESSION['flag'] = 'danger';
// 	$_SESSION['msg'] = "All fields must be filled!!!";
// 	header("location: ../apply_for_scholarship.php" );
// 	exit();
// }

// if($_POST['course_of_study'] === ''){
// 	$_SESSION['flag'] = 'danger';
// 	$_SESSION['msg'] = "All fields must be filled!!!";
// 	header("location: ../apply_for_scholarship.php" );
// 	exit();
// }

// if($_POST['official_website_of_the_institution'] === ''){
// 	$_SESSION['flag'] = 'danger';
// 	$_SESSION['msg'] = "All fields must be filled!!!";
// 	header("location: ../apply_for_scholarship.php" );
// 	exit();
// }

// if($_POST['certificate_obtained'] === ''){
// 	$_SESSION['flag'] = 'danger';
// 	$_SESSION['msg'] = "All fields must be filled!!!";
// 	header("location: ../apply_for_scholarship.php" );
// 	exit();
// }

// if($_POST['expected_year_of_program_completion'] === ''){
// 	$_SESSION['flag'] = 'danger';
// 	$_SESSION['msg'] = "All fields must be filled!!!";
// 	header("location: ../apply_for_scholarship.php" );
// 	exit();
// }

// if($_POST['contact_address_of_the_institution'] === ''){
// 	$_SESSION['flag'] = 'danger';
// 	$_SESSION['msg'] = "All fields must be filled!!!";
// 	header("location: ../apply_for_scholarship.php" );
// 	exit();
// }

// if($_POST['personal_statement'] === ''){
// 	$_SESSION['flag'] = 'danger';
// 	$_SESSION['msg'] = "All fields must be filled!!!";
// 	header("location: ../apply_for_scholarship.php" );
// 	exit();
// }

// $sub = $db->insert('scholarship', $_POST);
// if($sub){
// 	$_SESSION['flag'] = 'success';
// 	$_SESSION['msg'] = "You have successfully registered for MEDAF scholarship.";
// 	header("location: ../upload.php" );
// }
// 
?>