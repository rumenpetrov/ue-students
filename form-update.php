<?php
	include 'header.php';
?>

<div class="main">
	<div class="shell">
		<div class="form form-update">
			<form action="update.php" method="POST">
				<div class="form-head">
					<h2>Update Information / <em>Обнови Информация</em></h2>
				</div><!-- /.form-head -->
				
				<div class="form-body">
					<div class="form-group">
						<div class="form-row">
							<label for="student-id" class="form-label">ID</label>
						
							<div class="form-controls">
								<select name="student-id" id="student-id" class="select">
									<option value="">Student ID / Студент номер</option>

									<?php
										$q = mysqli_query($db,"SELECT id FROM students");

										if (!$q) {
											echo "Error";
										}

										while ($row=$q->fetch_assoc()) {
											echo '<option value="'.$row['id'].'">'.$row['id'].'</option>';
										}
										echo '</tr>';
									?>

								</select>
							</div><!-- /.form-controls -->
						</div><!-- /.form-row -->
					</div><!-- /.form-group -->
					
					<div class="form-row">
						<label for="first-name" class="form-label">First Name / Име</label>
					
						<div class="form-controls">
							<div class="field">
								<input type="text" name="first-name" id="first-name" placeholder="First Name / Име" />
							</div><!-- /.field -->
						</div><!-- /.form-controls -->
					</div><!-- /.form-row -->
		
					<div class="form-row">
						<label for="last-name" class="form-label">Last Name / Фамилия</label>
					
						<div class="form-controls">
							<div class="field">
								<input type="text" name="last-name" id="last-name" placeholder="Last Name / Фамилия" />
							</div><!-- /.field -->
						</div><!-- /.form-controls -->
					</div><!-- /.form-row -->
		
					<div class="form-row">
						<label for="sex" class="form-label">Gender / Пол</label>
					
						<div class="form-controls">
							<select name="sex" id="sex" class="select">
								<option value="">Gender / Пол</option>
								<option value="мъж">Мъж</option>
								<option value="жена">Жена</option>
							</select>
						</div><!-- /.form-controls -->
					</div><!-- /.form-row -->
		
					<div class="form-cols">
						<div class="form-col">
							<div class="form-row">
								<label for="identifier" class="form-label">Faculty Number / Факултетен Номер</label>
							
								<div class="form-controls">
									<div class="field">
										<input type="text" name="identifier" id="identifier" placeholder="Faculty Number / Факултетен Номер" />
									</div><!-- /.field -->
								</div><!-- /.form-controls -->
							</div><!-- /.form-row -->
						</div><!-- /.form-col -->
						
						<div class="form-col">
							<div class="form-row">
								<label for="specialty" class="form-label">Specialty / Специалност</label>
							
								<div class="form-controls">
									<select name="specialty" id="specialty" class="select">
										<option value="">Specialty / Специалност</option>

										<?php
											$q = mysqli_query($db,"SELECT specialnost_ime FROM specialnosti");

											if (!$q) {
												echo "Error";
											}

											while ($row=$q->fetch_assoc()) {
												echo '<option value="'.$row['specialnost_ime'].'">'.$row['specialnost_ime'].'</option>';
											}
											echo '</tr>';
										?>

									</select>
								</div><!-- /.form-controls -->
							</div><!-- /.form-row -->
						</div><!-- /.form-col -->	
					</div><!-- /.form-cols -->
		
					<div class="form-cols">
						<div class="form-col">
							<div class="form-row">
								<label for="group" class="form-label">Group / Група</label>
							
								<div class="form-controls">
									<select name="group" id="group" class="select">
										<option value="">Choose your group / Изберете група</option>
										
										<?php
											for ($i = 1; $i <= 100; $i++) { 
												echo '<option value="'.$i.'">'.$i.'</option>';
											}
										?>

									</select>
								</div><!-- /.form-controls -->
							</div><!-- /.form-row -->
						</div><!-- /.form-col -->
						
						<div class="form-col">
							<div class="form-row">
								<label for="semester" class="form-label">Semester / Курс</label>
							
								<div class="form-controls">
									<select name="semester" id="semester" class="select">
										<option value="">Choose your semester / Изберете курс</option>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
									</select>
								</div><!-- /.form-controls -->
							</div><!-- /.form-row -->
						</div><!-- /.form-col -->	
					</div><!-- /.form-cols -->
				</div><!-- /.form-body -->
				
				<div class="form-foot">
					<input type="submit" value="Update / Обнови" class="btn btn-black" />
				</div><!-- /.form-foot -->
			</form>
		</div><!-- /.form -->

		<div class="result"></div>
	</div><!-- /.shell -->
</div><!-- /.main -->

<?php
	include 'footer.php';
?>