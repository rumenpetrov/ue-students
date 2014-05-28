<?php
	include 'header.php';
?>

<div class="main">
	<div class="shell">
		<div class="form form-delete">
			<form action="delete.php" method="POST">
				<div class="form-head">
					<h2>Delete Student / <em>Изтрий Студент</em></h2>
				</div><!-- /.form-head -->
				
				<div class="form-body">
					<div class="form-row">
						<label for="identifier" class="form-label">Faculty Number / Факултетен Номер</label>
					
						<div class="form-controls">
							<div class="field">
								<input type="text" name="identifier" id="identifier" placeholder="Faculty Number / Факултетен Номер" />
							</div><!-- /.field -->
						</div><!-- /.form-controls -->
					</div><!-- /.form-row -->
				</div><!-- /.form-body -->
				
				<div class="form-foot">
					<input type="submit" name="submit" value="Delete / Изтрий" class="btn btn-black" />
				</div><!-- /.form-foot -->
			</form>
		</div><!-- /.form -->

		<div class="result"></div>
	</div><!-- /.shell -->
</div><!-- /.main -->

<?php
	include 'footer.php';
?>