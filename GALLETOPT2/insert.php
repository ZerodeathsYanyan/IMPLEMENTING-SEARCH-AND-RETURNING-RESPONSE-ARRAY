<?php require_once 'core/handleForms.php'; ?>
<?php require_once 'core/models.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
   <link rel="stylesheet" href="styles.css?v=<?php echo time(); ?>">
</head>
<body>
	<h1>Create new teacher</h1>
	<form action="core/handleForms.php" method="POST">
		<p>
			<label for="firstname">First Name</label> 
			<input type="text" name="firstname">
		</p>
		<p>
			<label for="lastname">Last Name</label> 
			<input type="text" name="lastname">
		</p>
		<p>
			<label for="YearsofExperience">Years of Experience</label> 
			<input type="text" name="YearsofExperience">
		</p>
		<p>
			<label for="favoriteSubject">Favorite Subject</label> 
			<input type="text" name="favoriteSubject">
		</p>
		<p>
			<label for="email">Email</label> 
			<input type="text" name="email">
			<input type="submit" name="insertUserBtn">
		</p>
	</form>
</body>
</html>