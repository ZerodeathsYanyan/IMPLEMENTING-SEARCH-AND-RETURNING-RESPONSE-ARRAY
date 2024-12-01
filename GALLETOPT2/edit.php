<?php require_once 'core/handleForms.php'; ?>
<?php require_once 'core/models.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="styles.css?v=<?php echo time(); ?>">
   <title>Document</title>
</head>
<body>
<?php $getUserByID = titser($pdo, $_GET['id']); ?>

	<h1>Edit Teacher</h1>
	<form action="core/handleForms.php?id=<?php echo $_GET['id']; ?>" method="POST">
		<p>
			<label for="firstname">First Name</label> 
			<input type="text" name="firstname" value="<?php echo $getUserByID['firstname']; ?>">
		</p>
		<p>
			<label for="lastname">Last Name</label> 
			<input type="text" name="lastname" value="<?php echo $getUserByID['lastname']; ?>">
		</p>
		<p>
			<label for="YearsofExperience">Years of Experience</label> 
			<input type="text" name="YearsofExperience" value="<?php echo $getUserByID['YearsofExperience']; ?>">
		</p>
		<p>
			<label for="FavoriteSubject">Favorite Subject</label> 
			<input type="text" name="favoriteSubject" value="<?php echo $getUserByID['favoriteSubject']; ?>">
		</p>
		<p>
			<label for="Email">Email</label> 
			<input type="text" name="email" value="<?php echo $getUserByID['email']; ?>">
			<input type="submit" value="Save" name="editUserBtn">
		</p>
	</form>
</body>
</html>