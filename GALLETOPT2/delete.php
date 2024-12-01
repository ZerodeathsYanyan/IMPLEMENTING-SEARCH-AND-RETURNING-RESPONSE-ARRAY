<?php require_once 'core/models.php'; ?>
<?php require_once 'core/dbConfig.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
   <link rel="stylesheet" href="styles.css?v=<?php echo time(); ?>">
</head>
<body>
	<h1>Are you sure you want to delete this user?</h1>
	<?php $titser = titser($pdo, $_GET['id']); ?>
	<div class="container" style="border-style: solid; border-color: red; background-color: #ffcbd1;height: 500px;">
		<h2>First Name: <?php echo $titser['firstname']; ?></h2>
		<h2>Last Name: <?php echo $titser['lastname']; ?></h2>
		<h2>Years of Experience: <?php echo $titser['YearsofExperience']; ?></h2>
		<h2>Favorite Subject: <?php echo $titser['favoriteSubject']; ?></h2>
		<h2>Email: <?php echo $titser['email']; ?></h2>

		<div class="deleteBtn" style="float: right; margin-right: 10px;">
			<form action="core/handleForms.php?id=<?php echo $_GET['id']; ?>" method="POST">
				<input type="submit" name="deleteUserBtn" value="Delete" style="background-color: #f69697; border-style: solid;">
			</form>			
		</div>	

	</div>
</body>
</html>