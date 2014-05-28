<?php
	if ($result = $db->query("SELECT * FROM students")) {
		if ($count = $result->num_rows) {
			echo "<p>", "Открити са: ", $count, " записа!", "</p>";

			echo '<table border="1"><tr><th>ID</th><th>Име</th><th>Фамилия</th><th>Пол</th><th>Факултетен Номер</th><th>Специалност</th><th>Група</th><th>Курс</th></tr>';

			while ($row=$result->fetch_assoc()) {
				echo '<tr><td>'.$row['id'].'</td><td>'.$row['ime'].'</td><td>'.$row['familiq'].'</td><td>'.$row['pol'].'</td><td>'.$row['fak_nomer'].'</td><td>'.$row['specialnost'].'</td><td>'.$row['grupa'].'</td><td>'.$row['kurs'].'</td></tr>';
			}
			echo '</tr>';

		echo '</table>';
		}
	}
?>