<?php 

include("includes/db.php");
if(isset($_POST['submit'])){


	$name = $_POST['name'];
	$user_name = $_POST['u_name'];
	$mobile = $_POST['number'];
	$dob = $_POST['dob'];
	$email = $_POST['uemail'];
	$pass = $_POST['upass1'];
	$c_pass = $_POST['upass2'];
	$image_name = $_FILES['image']['name'];
	$image_type = $_FILES['image']['type'];
	$image_size = $_FILES['image']['size'];
	$image_tmp  = $_FILES['image']['tmp_name'];
	

	if($image_type=="image/jpeg" or $image_type=="image/png" or
	$image_type=="image/gif"){
		
		if($image_size<=500000){
		move_uploaded_file($image_tmp,"images/$image_name");
		}
		else{
		echo "<script>alert('Image size is larger, only 50kb size is allowed ')</script>";
		}	
		
	
	}
	else{
	echo "<script>alert('Image type is invalid')</script>";
	}
	
	$query= "insert into post(name,user_name,mobile,dob,email,password,confirm_password,image) 
			values('$name','$user_name','$mobile','$dob','$email','$pass','$c_pass','$image_name')";
	
	if(mysql_query($query)){
	
	echo "<h1 class='center'>Done</h1>";
	
	}}
?>