<?php
	include 'header.php';
?>

<div class="main">
	<div class="shell">
		<div class="main-inner">
			<div id="result">
				<div class="table-results">
					<h2>Results / <em>Резултати</em></h2>
				
					<?php
						if ($result = $db->query("SELECT * FROM students")) {
							if ($count = $result->num_rows) {
								echo '<p class="message">', 'Открити са: ', $count, ' записа!', '</p>';

								echo '<table width="100%" cellspacing="0" cellpadding="0"><tr><th width="15px">ID</th><th width="200px">Име</th><th width="200px">Фамилия</th><th width="20px">Пол</th><th width="200px">Факултетен Номер</th><th width="200px">Специалност</th><th width="20px">Група</th><th>Курс</th></tr>';

								while ($row=$result->fetch_assoc()) {
									echo '<tr><td>'.$row['id'].'</td><td>'.$row['ime'].'</td><td>'.$row['familiq'].'</td><td>'.$row['pol'].'</td><td>'.$row['fak_nomer'].'</td><td>'.$row['specialnost'].'</td><td>'.$row['grupa'].'</td><td>'.$row['kurs'].'</td></tr>';
								}
								echo '</tr>';

							echo '</table>';
							}
						}
					?>

				</div><!-- /.table-results -->
			</div>
		</div><!-- /.main-inner -->
	</div><!-- /.shell -->
</div><!-- /.main -->

<?php
	include 'footer.php';
?>