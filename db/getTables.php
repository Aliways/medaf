<?php
	require 'config.php';
	$tables = $db->query("select table_name from information_schema.tables where TABLE_SCHEMA='medaf';")->fetchAll();

	// var_dump($tables);
	// $login_tables
	foreach ($tables as $key => $value) {
		# code...
		echo $value['table_name']." <br/>";
	}
?>