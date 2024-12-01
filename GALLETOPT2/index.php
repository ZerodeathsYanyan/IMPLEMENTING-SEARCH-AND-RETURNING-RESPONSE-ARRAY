<?php require_once 'core/dbConfig.php'; ?>
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
<?php if (isset($_SESSION['message'])) { ?>
		<h1 style="color: green; text-align: center; background-color: ghostwhite; border-style: solid;">	
			<?php echo $_SESSION['message']; ?>
		</h1>
	<?php } unset($_SESSION['message']); ?>

	<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="GET">
    <input type="text" name="searchInput" placeholder="Search here">
    <div style="display: inline-flex; gap: 10px;">
        <input type="submit" name="searchBtn" value="Search" style="padding: 10px; font-size: 1em;">
        <a href="index.php" style="text-decoration: none;">
            <button type="button">
                Clear Search
            </button>
        </a>
        <a href="insert.php" style="text-decoration: none;">
            <button type="button">
                Insert New User
            </button>
        </a>
    </div>
</form>


   <table style="width:100%; margin-top: 20px;">
		<tr>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Years of Experience</th>
			<th>Favorite Subject</th>
			<th>Email</th>
		</tr>
      <?php if (!isset($_GET['searchBtn'])) { ?>
			<?php $getAllUsers = alltitser($pdo); ?>
				<?php foreach ($getAllUsers as $row) { ?>
					<tr>
						<td><?php echo $row['firstname']; ?></td>
						<td><?php echo $row['lastname']; ?></td>
						<td><?php echo $row['YearsofExperience']; ?></td>
						<td><?php echo $row['favoriteSubject']; ?></td>
						<td><?php echo $row['email']; ?></td>
						<td>
							<a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a>
							<a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a>
						</td>
					</tr>
			<?php } ?>
			
		<?php } else { ?>
			<?php $searchForAUser =  Findtitser($pdo, $_GET['searchInput']); ?>
				<?php foreach ($searchForAUser as $row) { ?>
					<tr>
						<td><?php echo $row['firstname']; ?></td>
						<td><?php echo $row['lastname']; ?></td>
						<td><?php echo $row['YearsofExperience']; ?></td>
						<td><?php echo $row['favoriteSubject']; ?></td>
						<td><?php echo $row['email']; ?></td>
						<td>
							<a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a>
							<a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a>
						</td>
					</tr>
				<?php } ?>
		<?php } ?>	
   </table>
</body>
</html>