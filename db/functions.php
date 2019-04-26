<?php
	
	require 'db/src/Medoo.php';

	$applicants = $db->query('select * from scholarship')->fetchAll();


?>