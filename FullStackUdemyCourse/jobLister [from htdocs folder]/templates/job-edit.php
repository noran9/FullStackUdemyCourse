<?php include 'inc/header.php'; ?><br><br><br><br><br>
	<div class="container">
		<h2 class="page-header">Edit Job Listing</h2><br>
		<form method="post" action="edit.php?id=<?php echo $job->id; ?>">
			<div class="form-group">
				<label>Company</label>
				<input type="text" name="company" class="form-control" value="<?php echo $job->company; ?>">
			</div>
			<div class="form-group">
				<label>Category</label>
				<select type="text" name="category" class="form-control">
					<option value="0">Choose Category</option>
          		<?php foreach($categories as $cat): ?>
          			<?php if($job->category_id == $cat->id) : ?>
          				<option value="<?php echo $cat->id;?>" selected><?php echo $cat->name;?></option>
					<?php else: ?>
						<option value="<?php echo $cat->id;?>"><?php echo $cat->name;?></option>
					<?php endif; ?>
          		<?php endforeach; ?>
				</select>
			</div>
			<div class="form-group">
				<label>Job Title</label>
				<input type="text" name="job_title" class="form-control"value="<?php echo $job->job_title; ?>">
			</div>
			<div class="form-group">
				<label>Description</label>
				<textarea type="text" name="description" class="form-control"><?php echo $job->description; ?></textarea>
			</div>
			<div class="form-group">
				<label>Location</label>
				<input type="text" name="location" class="form-control" value="<?php echo $job->location; ?>">
			</div>
			<div class="form-group">
				<label>Salary</label>
				<input type="text" name="salary" class="form-control" value="<?php echo $job->salary; ?>">
			</div>
			<div class="form-group">
				<label>Contact User</label>
				<input type="text" name="contact_user" class="form-control" value="<?php echo $job->contact_user; ?>">
			</div>
			<div class="form-group">
				<label>Contact Email</label>
				<input type="text" name="contact_email" class="form-control" value="<?php echo $job->contact_email; ?>">
			</div>
			<input type="submit" class="btn btn-primary" value="Submit" name="submit">
		</form>
	</div>
<?php include 'inc/footer.php'; ?>