<?php
if (isset($_POST["step1"])) 
{
	displayStep1();
}
elseif (isset($_POST["step2"]))
{
	displayStep2();
}
elseif (isset($_POST["step3"])) 
{
	displayStep3();
}
elseif (isset($_POST["Thanks"]))
{
	displayThanks();	
}
else
{
	displayStep1();
}
function setValue( $fieldName )
{
	if (isset($_POST[$fieldName])) 
	{
		echo _POST[$fieldName];
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	function displayStep1()
	{?>
		<form method="post">
			<h1>This is Step1</h1>
			<input type="hidden" name="txtm" value="<?php setvalue("txtm")?>">
			<input type="hidden" name="txtl" value="<?php setvalue("txtl")?>">
			Enter First Name<br>
			<input type="text" name="txtf" value="<?php setvalue("txtf")?>"/><br>
			<input type="submit" name="step2" value="Step2">
		</form>
	<?php }
	function displayStep2()
	{?>
		<form method="post">
			<h1>This is Step2</h1>
			<input type="hidden" name="txtf" value="<?php setvalue("txtf")?>">
			<input type="hidden" name="txtl" value="<?php setvalue("txtl")?>">
			Enter Middle Name<br>
			<input type="text" name="txtm" value="<?php setvalue("txtm")?>">/><br>
			<input type="submit" name="Step1" value="Step1">
			<input type="submit" name="Step3" value="Step3">
		</form>
	<?php }
	function displayStep3()
	{?>
		<form method="post">
			<h1>This is Step3</h1>
			<input type="hidden" name="txtf" value="<?php setvalue("txtf")?>">
			<input type="hidden" name="txtm" value="<?php setvalue("txtm")?>">
			Enter Last Name<br>
			<input type="text" name="txtl" value="<?php setvalue("txtl")?>">/><br>
			<input type="submit" name="Step2" value="Step2">
			<input type="submit" name="Thanks" value="Thanks">
		</form>
	?<?php
	function displayThanks()
	{?>
		<h1>Thanks for submitting information</h1>
	<?php }?>
	</body>
	</html>