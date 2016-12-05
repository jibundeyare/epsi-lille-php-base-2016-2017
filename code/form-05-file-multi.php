<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8" />
		<title>form</title>
	</head>
	<body>

		<form id="form1" action="form-06-file-multi.php" method="post" enctype="multipart/form-data">
			<div>
				<label for="tag1">tag1</label><br />
				<input type="text" id="tag1" name="tag[]" placeholder="tag"/>
			</div>
			<div>
				<label for="tag2">tag2</label><br />
				<input type="text" id="tag2" name="tag[]" placeholder="tag"/>
			</div>
			<div>
				<label for="tag3">tag3</label><br />
				<input type="text" id="tag3" name="tag[]" placeholder="tag"/>
			</div>

			<div>
				<label for="fichier1">fichier1</label><br />
				<input type="file" id="fichier1" name="fichier[]" />
			</div>
			<div>
				<label for="fichier2">fichier2</label><br />
				<input type="file" id="fichier2" name="fichier[]" />
			</div>
			<div>
				<label for="fichier3">fichier3</label><br />
				<input type="file" id="fichier3" name="fichier[]" />
			</div>

			<div>
				<input type="submit" id="submit" value="envoyer" />
			</div>
		</form>

	</body>
</html>
