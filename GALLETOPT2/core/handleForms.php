<?php  

require_once 'dbConfig.php';
require_once 'models.php';


if (isset($_POST['insertUserBtn'])) {
	$insertUser = insertNewUser($pdo,$_POST['firstname'], $_POST['lastname'], $_POST['YearsofExperience'], $_POST['favoriteSubject'], $_POST['email']);

	if ($insertUser) {
		$_SESSION['message'] = "Successfully inserted!";
		header("Location: ../index.php");
	}
}


if (isset($_POST['editUserBtn'])) {
   $id = $_GET['id'];
	$editUser = editUser($pdo, $_POST['firstname'], $_POST['lastname'], $_POST['YearsofExperience'], $_POST['favoriteSubject'], $_POST['email'], $id);

	if ($editUser) {
		$_SESSION['message'] = "Successfully edited!";
		header("Location: ../index.php");
	}
}

if (isset($_POST['deleteUserBtn'])) {
	$deleteUser = deleteUser($pdo,$_GET['id']);

	if ($deleteUser) {
		$_SESSION['message'] = "Successfully deleted!";
		header("Location: ../index.php");
	}
}

if (isset($_GET['searchBtn'])) {
	$searchForAUser = Findtitser($pdo, $_GET['searchInput']);
	foreach ($searchForAUser as $row) {
		echo "<tr> 
				<td>{$row['id']}</td>
				<td>{$row['firstname']}</td>
				<td>{$row['lastname']}</td>
				<td>{$row['YearsofExperience']}</td>
				<td>{$row['favoriteSubject']}</td>
				<td>{$row['email']}</td>
			  </tr>";
	}
}

?>