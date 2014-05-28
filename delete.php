<?php
	error_reporting(0);
	require 'db/connect.php';
	
	if ($_POST) {
		if (isset($_POST['identifier']) === true) {
			
			$identifier = (int)$_POST['identifier'];
			$identifier = mysqli_real_escape_string($db,$identifier);

			// Delete student
			$q = "DELETE FROM students WHERE fak_nomer = $identifier";

			if (mysqli_query($db,$q)) {
				echo '<p>Affected rows ' . $db->affected_rows . '. / <em>Бяха променени ' .$db->affected_rows. ' ред(а).</em></p>';
			} else {
				echo '<p>Error. / <em>Грешка.</em></p>';
				// echo mysqli_error($db);
			}
		}
	}
?>