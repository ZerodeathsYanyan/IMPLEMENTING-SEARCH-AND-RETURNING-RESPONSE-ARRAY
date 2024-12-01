<?php  

require_once 'dbConfig.php';

function alltitser($pdo) {
	$sql = "SELECT * FROM titser 
			ORDER BY firstname ASC";
	$stmt = $pdo->prepare($sql);
	$executeQuery = $stmt->execute();
	if ($executeQuery) {
		return $stmt->fetchAll();
	}
}

function titser($pdo, $id) {
	$sql = "SELECT * from titser WHERE id = ?";
	$stmt = $pdo->prepare($sql);
	$executeQuery = $stmt->execute([$id]);

	if ($executeQuery) {
		return $stmt->fetch();
	}
}

function Findtitser($pdo, $find) {
	
	$sql = "SELECT * FROM titser WHERE 
			CONCAT(firstname,lastname, YearsofExperience, favoriteSubject,
				email) 
			LIKE ?";

	$stmt = $pdo->prepare($sql);
	$executeQuery = $stmt->execute(["%".$find."%"]);
	if ($executeQuery) {
		return $stmt->fetchAll();
	}
}

function insertNewUser($pdo, $firstname, $lastname, $YearsofExperience, 
	$favoritesubject, $email) {

	$sql = "INSERT INTO titser 
			(
				firstname,
				lastname,
				YearsofExperience,
				favoriteSubject,
				email
			)
			VALUES (?,?,?,?,?)
			";

	$stmt = $pdo->prepare($sql);
	$executeQuery = $stmt->execute([
		$firstname, $lastname, $YearsofExperience, 
		$favoritesubject, $email
	]);

	if ($executeQuery) {
		return true;
	}

}

function editUser($pdo, $firstname, $lastname, $YearsofExperience, $favoriteSubject, $email, $id) {
	$sql = "UPDATE titser
				SET firstname = ?,
					lastname = ?,
					YearsofExperience = ?,
					favoriteSubject = ?,
					email = ?
				WHERE id = ? 
			";

	$stmt = $pdo->prepare($sql);
	$executeQuery = $stmt->execute([$firstname, $lastname, $YearsofExperience, 
   $favoriteSubject, $email, $id]);

	if ($executeQuery) {
		return true;
	}

}


function deleteUser($pdo, $id) {
	$sql = "DELETE FROM titser 
			WHERE id = ?";
	$stmt = $pdo->prepare($sql);
	$executeQuery = $stmt->execute([$id]);

	if ($executeQuery) {
		return true;
	}
}

?>