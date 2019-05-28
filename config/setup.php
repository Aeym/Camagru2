<?php 
	include('./database.php');
	$sql = file_get_contents('../sql/cambase.sql');
	if (!file_exists('C:\wamp64\bin\mysql\mysql5.7.21\data\cambase'))
	{
		$createdb = new PDO('mysql:host=localhost;', $DB_USER , $DB_PASSWORD);
		$createdb->query($sql);
		echo 'Database cambase created';
	}
	else
		echo 'Database already exist';
?>