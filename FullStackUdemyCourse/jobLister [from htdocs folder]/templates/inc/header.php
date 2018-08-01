<!DOCTYPE html>
<html>
<head>
	<title>JobLister</title>
	<link rel="stylesheet" type="text/css" href="https://bootswatch.com/4/flatly/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="templates/inc/css/styles.css">
</head>
<body>

 <nav class="navbar navbar-expand navbar-dark fixed-top bg-dark">
      <a class="navbar-brand" href="index.php"><?php echo SITE_TITLE; ?></a>
      <div>
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="create.php">Create Listing</a>
          </li>
        </ul>
      </div>
    </nav>
    <?php displayMessage(); ?>

