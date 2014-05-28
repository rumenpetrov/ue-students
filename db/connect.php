<?php

$db = new mysqli('localhost', 'root', '', 'students');

if ($db->connect_errno) {
	echo $db->connect_error;
	die('Database is missing!');
}

$db->set_charset('utf8');

?>