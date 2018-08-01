<?php include 'inc/header.php'; ?><br><br><br><br><br>
	<div class="container">
		<h2 class="page-header">Create Job Listing</h2><br>
		<form method="post" action="create.php">
			<div class="form-group">
				<label>Company</label>
				<input type="text" name="company" class="form-control">
			</div>
			<div class="form-group">
				<label>Category</label>
				<select type="text" name="category" class="form-control">
					<option value="0">Choose Category</option>
          		<?php foreach($categories as $cat): ?>
          			<option value="<?php echo $cat->id;?>"><?php echo $cat->name;?></option>
          		<?php endforeach; ?>
				</select>
			</div>
			<div class="form-group">
				<label>Job Title</label>
				<input type="text" name="job_title" class="form-control">
			</div>
			<div class="form-group">
				<label>Description</label>
				<textarea type="text" name="description" class="form-control"></textarea>
			</div>
			<div class="form-group">
				<label>Location</label>
				<input type="text" name="location" class="form-control">
			</div>
			<div class="form-group">
				<label>Salary</label>
				<input type="text" name="salary" class="form-control">
			</div>
			<div class="form-group">
				<label>Contact User</label>
				<input type="text" name="contact_user" class="form-control">
			</div>
			<div class="form-group">
				<label>Contact Email</label>
				<input type="text" name="contact_email" class="form-control">
			</div>
			<input type="submit" class="btn btn-primary" value="Submit" name="submit">
		</form>
	</div>
<?php include 'inc/footer.php'; ?>