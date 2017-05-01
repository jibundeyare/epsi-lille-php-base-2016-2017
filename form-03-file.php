<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8" />
		<title>form</title>
	</head>
	<body>

		<form id="form1" action="form-04-file.php" method="post" enctype="multipart/form-data">
			<div>
				<label for="tag">tag</label><br />
				<input type="text" id="tag" name="tag" placeholder="tag"/>
			</div>
			<div>
				<label for="fichier">fichier</label><br />
				<input type="file" id="fichier" name="fichier" />
			</div>
			<div>
				<input type="submit" id="submit" value="envoyer" />
			</div>
		</form>

	</body>
</html>
