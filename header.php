<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>UE Students</title>

	<link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700,900,600' rel='stylesheet' type='text/css' />
	<link rel="shortcut icon" type="image/x-icon" href="css/images/favicon.ico" />
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />

	<script type="text/javascript" src="js/jquery-1.11.0.min.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
</head>
<body>
<div class="container">
	<div class="header">
		<div class="nav">
			<ul>
				<li><a href="form-add.php">Add/<em>Добави</em></a></li>
				<li><a href="form-update.php">Update/<em>Обнови</em></a></li>
				<li><a href="form-delete.php">Delete/<em>Изтрий</em></a></li>
			</ul>
		</div><!-- /.nav -->

		<div class="nav-secondary">
			<ul>
				<li><a href="index.php">Home / <em>Начало</em></a></li>
				<li><a href="about.php">About Us / <em>За Нас</em></a></li>
			</ul>
		</div><!-- /.nav-secondary -->
	</div><!-- /.header -->

<?php
	// error_reporting(0);
	require 'db/connect.php';
?>