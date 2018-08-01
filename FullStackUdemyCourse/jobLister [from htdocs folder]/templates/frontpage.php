<?php include 'inc/header.php'; ?>

 <div class="jumbotron">
        <div class="container text-center"><br><br>
          <h1 class="display-3">Find a Job</h1>
          <form method="GET" action="index.php">
          	<select name="category" class="form-control">
          		<option value="0">Choose Category</option>
          		<?php foreach($categories as $cat): ?>
          			<option value="<?php echo $cat->id;?>"><?php echo $cat->name;?></option>
          		<?php endforeach; ?>
          	</select><br>
          	<input type="submit" name="" class="btn btn-lg btn-success" value="Find">
          </form>
        </div>
      </div>

      <div class="container">
        <!-- Example row of columns -->
        <h3><?php echo $title;?></h3><hr>
        <?php foreach ($jobs as $job): ?>
        	
               <div class="row marketing">
          <div class="col-md-10">
            <h2><?php echo $job->job_title; ?></h2>
            <p><?php echo $job->description; ?> </p>
            <p><a class="btn btn-secondary" href="job.php?id=<?php echo $job->id; ?>" role="button">View details &raquo;</a></p>
        	<br>
          </div>
        </div>

        <?php endforeach; ?>

      </div> <!-- /container -->

    </main>

<?php include 'inc/footer.php'; ?>