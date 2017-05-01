<?php

$server = 'localhost';
$database = 'website';
$user = 'website';
$password = 'website';

// connexion
$dsn = "mysql:host=$server;dbname=$database";

try {
	$dbh = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
	echo $e->getMessage();
}

// création table
$sql = <<<EOT
CREATE TABLE users (
	id INT AUTO_INCREMENT NOT NULL,
	login VARCHAR(255) NOT NULL,
	PRIMARY KEY(id)
)
EOT;

try {
	$dbh->exec($sql);

	$error = $dbh->errorInfo();

	if (!is_null($error[1])) {
		$errorMessage = "Impossible de créer la table\n";
		$errorMessage .= $error[0] . "\n";
		$errorMessage .= $error[1] . "\n";
		$errorMessage .= $error[2] . "\n";

		throw new Exception($errorMessage);
	}
} catch (PDOException $e) {
	echo $e->getMessage();
} catch (Exception $e) {
	echo $e->getMessage();
}

// insertion de données
$sql = <<<EOT
INSERT INTO users
(id, login)
VALUES
(:id, :login)
EOT;

$users = array(
	array(
		'id' => 100,
		'login' => 'toto',
	),
	array(
		'id' => 101,
		'login' => 'titi',
	),
	array(
		'id' => 102,
		'login' => 'tata',
	),
);

try {
	$preparedSql = $dbh->prepare($sql);

	foreach ($users as $user) {
		$preparedSql->bindParam('id', $user['id'], PDO::PARAM_INT);
		$preparedSql->bindParam('login', $user['login'], PDO::PARAM_STR);

		$preparedSql->execute();

		$error = $preparedSql->errorInfo();

		if (!is_null($error[1])) {
			$errorMessage = "Impossible d'insérer des users\n";
			$errorMessage .= $error[0] . "\n";
			$errorMessage .= $error[1] . "\n";
			$errorMessage .= $error[2] . "\n";

			throw new Exception($errorMessage);
		}
	}
} catch (PDOException $e) {
	echo $e->getMessage();
} catch (Exception $e) {
	echo $e->getMessage();
}

// mise à jour de données
$sql = <<<EOT
UPDATE users
SET login = :login
WHERE id = :id
EOT;

$users = array(
	array(
		'id' => 100,
		'login' => 'tutu',
	),
);

try {
	$preparedSql = $dbh->prepare($sql);

	foreach ($users as $user) {
		$preparedSql->bindParam('id', $user['id'], PDO::PARAM_INT);
		$preparedSql->bindParam('login', $user['login'], PDO::PARAM_STR);

		$preparedSql->execute();

		$error = $preparedSql->errorInfo();

		if (!is_null($error[1])) {
			$errorMessage = "Impossible d'insérer des users\n";
			$errorMessage .= $error[0] . "\n";
			$errorMessage .= $error[1] . "\n";
			$errorMessage .= $error[2] . "\n";

			throw new Exception($errorMessage);
		}
	}
} catch (PDOException $e) {
	echo $e->getMessage();
} catch (Exception $e) {
	echo $e->getMessage();
}

// suppression de données
$sql = <<<EOT
DELETE FROM users
WHERE id = :id
EOT;

$users = array(
	array(
		'id' => 102,
	),
);

try {
	$preparedSql = $dbh->prepare($sql);

	foreach ($users as $user) {
		$preparedSql->bindParam('id', $user['id'], PDO::PARAM_INT);

		$preparedSql->execute();

		$error = $preparedSql->errorInfo();

		if (!is_null($error[1])) {
			$errorMessage = "Impossible d'insérer des users\n";
			$errorMessage .= $error[0] . "\n";
			$errorMessage .= $error[1] . "\n";
			$errorMessage .= $error[2] . "\n";

			throw new Exception($errorMessage);
		}
	}
} catch (PDOException $e) {
	echo $e->getMessage();
} catch (Exception $e) {
	echo $e->getMessage();
}

// lecture de données
$sql = <<<EOT
SELECT *
FROM users
EOT;

try {
	$preparedSql = $dbh->prepare($sql);
	$preparedSql->execute();

	$error = $preparedSql->errorInfo();

	if (!is_null($error[1])) {
		$errorMessage = "Impossible lire les users\n";
		$errorMessage .= $error[0] . "\n";
		$errorMessage .= $error[1] . "\n";
		$errorMessage .= $error[2] . "\n";

		throw new Exception($errorMessage);
	}

	// récupération dans un tableau associatif
	// while ($result = $preparedSql->fetch(PDO::FETCH_ASSOC)) {
	// 	var_dump($result);
	// }

	// récupération dans un objet
	while ($result = $preparedSql->fetch(PDO::FETCH_OBJ)) {
		var_dump($result);
	}
} catch (PDOException $e) {
	echo $e->getMessage();
} catch (Exception $e) {
	echo $e->getMessage();
}

unset($dbh);
