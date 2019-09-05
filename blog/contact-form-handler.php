<?php 
/**................................................................
 * @package eblog v 1.0
 * @author Faith Awolu 
 * Hillsofts Technology Ltd.            
 * (hillsofts@gmail.com)
 * ................................................................
 */

include 'connect.php';
// var_dump($_POST);
$settings = ORM::for_table("settings")->find_one();
$errors = '';
$myemail = $settings->email;//<-----Put Your email address here.
if(empty($_POST['name'])  || 
   empty($_POST['email']) || 
   empty($_POST['comments']))
{
    $errors .= "\n Error: all fields are required";
}
// var_dump($_POST);
// die();
$name = $_POST['name']; 
$email_address = $_POST['email']; 
$message = $_POST['comments']; 

if (!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i", $email_address))
{
    $errors .= "\n Error: Invalid email address";
}

if( empty($errors))
{
	$to = $myemail; 
	$email_subject = "Contact form submission: $name";
	$email_body = "You have received a new mail from $settings->site_name;. ".
	" Here are the details:\n Name: $name \n Email: $email_address \n Message \n $message"; 
	
	$headers = "From: $myemail\n"; 
	$headers .= "Reply-To: $email_address";
	
	mail($to,$email_subject,$email_body,$headers);
	mail('leewebs@yahoo.com', 'subject', 'Hello There, Assalaamu alaykum.', 'From: leewebs@yahoo.com');
	//redirect to the 'thank you' page
	//header('Location: contact_success.php');
        	
	echo '<script language = "javascript">';
  	// echo "window.location.href='login.php'"; 
  	echo "alert('Thanks for contacting $settings->site_name. Will get back to you soon!');window.location.href='contact.php'";
   	echo '</script>';
    exit;
} 
?>
