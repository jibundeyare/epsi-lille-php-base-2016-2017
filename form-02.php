<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8" />
		<title>form</title>
	</head>
	<body>

<div class="debug">
<pre>
<?php var_dump($_POST); ?>
</pre>
<?php
foreach ($_POST as $key => $value) {
	echo "$key: $value" . "<br />\n";
}
?>
</div>

<div class="content">
<?php
$error = false;
$errorMessages = array();

// valeurs par défaut
$nom = '';
$message = '';

// vérification de l'existance des valeurs
if (isset($_POST['nom'])) {
	$nom = $_POST['nom'];

	if (empty($nom)) {
		$error = true;
		$errorMessages[] = 'nom est vide';
	}

	if (strlen($nom) <= 2) {
		$error = true;
		$errorMessages[] = 'nom est trop court';
	}

	if (strlen($nom) >= 10) {
		$error = true;
		$errorMessages[] = 'nom est trop long';
	}
} else {
	$error = true;
	$errorMessages[] = 'Vous devez renseigner un nom';
}

if (isset($_POST['message'])) {
	$message = $_POST['message'];

	if (empty($message)) {
		$error = true;
		$errorMessages[] = 'message est vide';
	}
} else {
	$error = true;
	$errorMessages[] = 'Vous devez renseigner un message';
}

// traitement des valeurs
if (!$error) {
	echo "nom: $nom" . "<br />\n";
	echo "message: $message" . "<br />\n";
} else {
	foreach ($errorMessages as $m) {
		echo $m . "<br />\n";
	}
}
?>
</div>

	</body>
</html>
