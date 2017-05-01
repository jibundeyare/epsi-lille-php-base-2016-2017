<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8" />
		<title>form</title>
	</head>
	<body>

<div class="debug">
<pre>
<?php
var_dump($_POST);
var_dump($_FILES);
?>
</pre>
</div>

<div class="content">
<?php
$error = false;
$errorMessages = array();

// validation des valeurs
if (isset($_FILES['fichier'])) {
	switch ($_FILES['fichier']['error']) {
		case UPLOAD_ERR_NO_FILE:
			$error = true;
			$errorMessages[] = 'Aucun fichier n\'a été téléchargé';
			break;
		case UPLOAD_ERR_CANT_WRITE:
			$error = true;
			$errorMessages[] = 'Échec de l\'écriture du fichier sur le disque';
			break;
	}

	if ($_FILES['fichier']['type'] != "image/jpeg") {
		$error = true;
		$errorMessages[] = 'Seuls les fichiers image/jpeg sont acceptés';
	}

	if ($_FILES['fichier']['size'] > 100000) {
		$error = true;
		$errorMessages[] = 'Trop grand';
	}
} else {
	$error = true;
	$errorMessages[] = 'Vous devez fournir un fichier';
}

// traitement des valeurs
if (!$error) {
	$fileName = __DIR__ . '/' . uniqid() . '.jpg';
	$result = move_uploaded_file($_FILES['fichier']['tmp_name'], $fileName);

	if ($result) {
		echo "Fichier stocké sous le nom $fileName" . "<br />\n";
		echo "Nom original : {$_FILES['fichier']['name']}" . "<br />\n";
	} else {
		echo "Impossible de stocker le fichier" . "<br />\n";
	}

} else {
	foreach ($errorMessages as $m) {
		echo $m . "<br />\n";
	}
}
?>
</div>

	</body>
</html>
