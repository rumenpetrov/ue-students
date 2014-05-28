<?php
	error_reporting(0);
	require 'db/connect.php';

	if ($_POST) {
		$student_id = (int)($_POST['student-id']);
		$student_id = mysqli_real_escape_string($db,$student_id);

		$first_name = trim($_POST['first-name']);
		$first_name = mysqli_real_escape_string($db,$first_name);
		
		$last_name = trim($_POST['last-name']);
		$last_name = mysqli_real_escape_string($db,$last_name);

		$sex = trim($_POST['sex']);
		$sex = mysqli_real_escape_string($db,$sex);
		
		$identifier = (int)$_POST['identifier'];
		$identifier = mysqli_real_escape_string($db,$identifier);

		$specialty = trim($_POST['specialty']);
		$specialty = mysqli_real_escape_string($db,$specialty);

		$group = (int)$_POST['group'];
		$group = mysqli_real_escape_string($db,$group);

		$semester = (int)$_POST['semester'];
		$semester = mysqli_real_escape_string($db,$semester);

		// Update student information
		$q = 'UPDATE students SET 
		ime = "'.$first_name.'",
		familiq = "'.$last_name.'",
		pol = "'.$sex.'",
		fak_nomer = "'.$identifier.'",
		specialnost = "'.$specialty.'",
		grupa = "'.$group.'",
		kurs = "'.$semester.'"
		WHERE id = '.$student_id.'';

		if (mysqli_query($db,$q)) {
			echo '<p>Affected rows ' . $db->affected_rows . '. / <em>Бяха променени ' .$db->affected_rows. ' ред(а).</em></p>';
		} else {
			echo '<p>Error. / <em>Грешка.</em></p>';
			// echo mysqli_error($db);
		}
	}
?>