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
	header("location: ../apply_for_scholarship.php" );
endif;




$filename = $_FILES['files_submitted_documents_invoice']['name'];
move_uploaded_file($_FILES['files_submitted_documents_invoice']['tmp_name'], '../files/'.$filename);
$_POST['files_submitted_documents_invoice'] = $filename;

$filename = $_FILES['files_submitted_documents_school_id_card']['name'];
move_uploaded_file($_FILES['files_submitted_documents_school_id_card']['tmp_name'], '../files/'.$filename);
$_POST['files_submitted_documents_school_id_card'] = $filename;

$filename = $_FILES['files_submitted_documents_last_exam_result']['name'];
move_uploaded_file($_FILES['files_submitted_documents_last_exam_result']['tmp_name'], '../files/'.$filename);
$_POST['files_submitted_documents_last_exam_result'] = $filename;

$filename = $_FILES['files_submitted_passport']['name'];
move_uploaded_file($_FILES['files_submitted_passport']['tmp_name'], '../files/'.$filename);
$_POST['files_submitted_passport'] = $filename;



$sub = $db->insert('upload', $_POST);
if($sub):
	$_SESSION['flag'] = 'success';
	$_SESSION['msg'] = "Successful!";
	header("location: ../upload.php" );
endif;































// if($_FILES['scholarship_type'] === ''){
// 	$_SESSION['flag'] = 'danger';
// 	$_SESSION['msg'] = "All fields must be filled!!!";

// 	exit();
// }


// if($_FILES['full_name'] === ''){
// 	$_SESSION['flag'] = 'danger';
// 	$_SESSION['msg'] = "All fields must be filled!!!";

// 	exit();
// }


// if($_FILES['gender'] === ''){
// 	$_SESSION['flag'] = 'danger';
// 	$_SESSION['msg'] = "All fields must be filled!!!";
	
// 	exit();
// }


// if($_FILES['religion'] === ''){
// 	$_SESSION['flag'] = 'danger';
// 	$_SESSION['msg'] = "All fields must be filled!!!";
	
// 	exit();
// }


// if($_FILES['marital_status'] === ''){
// 	$_SESSION['flag'] = 'danger';
// 	$_SESSION['msg'] = "All fields must be filled!!!";
	
// 	exit();
// }


// if($_FILES['email'] === ''){
// 	$_SESSION['flag'] = 'danger';
// 	$_SESSION['msg'] = "All fields must be filled!!!";
	
// 	exit();
// }


// if($_FILES['date_of_birth'] === ''){
// 	$_SESSION['flag'] = 'danger';
// 	$_SESSION['msg'] = "All fields must be filled!!!";
	
// 	exit();
// }


// if($_FILES['state_of_origin'] === ''){
// 	$_SESSION['flag'] = 'danger';
// 	$_SESSION['msg'] = "All fields must be filled!!!";
	
// 	exit();
// }


// if($_FILES['phone_number'] === ''){
// 	$_SESSION['flag'] = 'danger';
// 	$_SESSION['msg'] = "All fields must be filled!!!";
	
// 	exit();
// }


// if($_FILES['islamic_organisation'] === ''){
// 	$_SESSION['flag'] = 'danger';
// 	$_SESSION['msg'] = "All fields must be filled!!!";
	
// 	exit();
// }


// if($_FILES['local_government_area_of_origin'] === ''){
// 	$_SESSION['flag'] = 'danger';
// 	$_SESSION['msg'] = "All fields must be filled!!!";
	
// 	exit();
// }


// if($_FILES['name_of_institution'] === ''){
// 	$_SESSION['flag'] = 'danger';
// 	$_SESSION['msg'] = "All fields must be filled!!!";
	
// 	exit();
// }


// if($_FILES['course_of_study'] === ''){
// 	$_SESSION['flag'] = 'danger';
// 	$_SESSION['msg'] = "All fields must be filled!!!";
	
// 	exit();
// }


// if($_FILES['official_website_of_institute'] === ''){
// 	$_SESSION['flag'] = 'danger';
// 	$_SESSION['msg'] = "All fields must be filled!!!";
	
// 	exit();
// }


// if($_FILES['certificate_obtained'] === ''){
// 	$_SESSION['flag'] = 'danger';
// 	$_SESSION['msg'] = "All fields must be filled!!!";
	
// 	exit();
// }


// if($_FILES['expected_year_of_program_completion'] === ''){
// 	$_SESSION['flag'] = 'danger';
// 	$_SESSION['msg'] = "All fields must be filled!!!";

// 	exit();
// }


// if($_FILES['contact_address_of_the_institution'] === ''){
// 	$_SESSION['flag'] = 'danger';
// 	$_SESSION['msg'] = "All fields must be filled!!!";

// 	exit();
// }


// if($_FILES['personal_statement'] === ''){
// 	$_SESSION['flag'] = 'danger';
// 	$_SESSION['msg'] = "All fields must be filled!!!";
	
// 	exit();
// }


// if($_FILES['files_submitted_documents_invoice'] === ''){
// 	$_SESSION['flag'] = 'danger';
// 	$_SESSION['msg'] = "All fields must be filled!!!";

// 	exit();
// }

// if($_FILES['files_submitted_documents_school_id_card'] === ''){
// 	$_SESSION['flag'] = 'danger';
// 	$_SESSION['msg'] = "All fields must be filled!!!";

// 	exit();
// }

// if($_FILES['files_submitted_documents_last_exam_result'] === ''){
// 	$_SESSION['flag'] = 'danger';
// 	$_SESSION['msg'] = "All fields must be filled!!!";

// 	exit();
// }

// if($_FILES['files_submitted_passport'] === ''){
// 	$_SESSION['flag'] = 'danger';
// 	$_SESSION['msg'] = "All fields must be filled!!!";
	
// 	exit();
// }


// $filename = $_FILES['scholarship_type']['name'];
// move_uploaded_file($_FILES['scholarship_type']['tmp_name'], '../files/'.$filename);
// $_POST['scholarship_type'] = $filename;


// $filename = $_FILES['full_name']['name'];
// move_uploaded_file($_FILES['full_name']['tmp_name'], '../files/'.$filename);
// $_POST['full_namegender'] = $filename;


// $filename = $_FILES['gender']['name'];
// move_uploaded_file($_FILES['gender']['tmp_name'], '../files/'.$filename);
// $_POST['gender'] = $filename;


// $filename = $_FILES['religion']['name'];
// move_uploaded_file($_FILES['religion']['tmp_name'], '../files/'.$filename);
// $_POST['religion'] = $filename;



// $filename = $_FILES['marital_status']['name'];
// move_uploaded_file($_FILES['marital_status']['tmp_name'], '../files/'.$filename);
// $_POST['marital_status'] = $filename;


// $filename = $_FILES['email']['name'];
// move_uploaded_file($_FILES['email']['tmp_name'], '../files/'.$filename);
// $_POST['email'] = $filename;


// $filename = $_FILES['date_of_birth']['name'];
// move_uploaded_file($_FILES['date_of_birth']['tmp_name'], '../files/'.$filename);
// $_POST['date_of_birth'] = $filename;


// $filename = $_FILES['state_of_origin']['name'];
// move_uploaded_file($_FILES['state_of_origin']['tmp_name'], '../files/'.$filename);
// $_POST['state_of_origin'] = $filename;



// $filename = $_FILES['phone_number']['name'];
// move_uploaded_file($_FILES['phone_number']['tmp_name'], '../files/'.$filename);
// $_POST['phone_number'] = $filename;


// $filename = $_FILES['islamic_organisation']['name'];
// move_uploaded_file($_FILES['islamic_organisation']['tmp_name'], '../files/'.$filename);
// $_POST['islamic_organisation'] = $filename;


// $filename = $_FILES['local_government_area_of_origin']['name'];
// move_uploaded_file($_FILES['local_government_area_of_origin']['tmp_name'], '../files/'.$filename);
// $_POST['local_government_area_of_origin'] = $filename;


// $filename = $_FILES['name_of_institution']['name'];
// move_uploaded_file($_FILES['name_of_institution']['tmp_name'], '../files/'.$filename);
// $_POST['name_of_institution'] = $filename;


// $filename = $_FILES['course_of_study']['name'];
// move_uploaded_file($_FILES['course_of_study']['tmp_name'], '../files/'.$filename);
// $_POST['course_of_study'] = $filename;


// $filename = $_FILES['official_website_of_institute']['name'];
// move_uploaded_file($_FILES['official_website_of_institute']['tmp_name'], '../files/'.$filename);
// $_POST['official_website_of_institute'] = $filename;


// $filename = $_FILES['certificate_obtained']['name'];
// move_uploaded_file($_FILES['certificate_obtained']['tmp_name'], '../files/'.$filename);
// $_POST['certificate_obtained'] = $filename;


// $filename = $_FILES['expected_year_of_program_completion']['name'];
// move_uploaded_file($_FILES['expected_year_of_program_completion']['tmp_name'], '../files/'.$filename);
// $_POST['expected_year_of_program_completion'] = $filename;


// $filename = $_FILES['contact_address_of_the_institution']['name'];
// move_uploaded_file($_FILES['contact_address_of_the_institution']['tmp_name'], '../files/'.$filename);
// $_POST['contact_address_of_the_institution'] = $filename;


// $filename = $_FILES['personal_statement']['name'];
// move_uploaded_file($_FILES['personal_statement']['tmp_name'], '../files/'.$filename);
// $_POST['personal_statement'] = $filename;
