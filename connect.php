<?php
$connection = mysqli_connect('localhost', 'root', 'root', 'friends');

if (!$connection)
	{
	die("Database Connection Failed" . mysqli_error($connection));
	}

?>
