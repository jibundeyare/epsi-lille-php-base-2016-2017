<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8" />
		<title>form</title>
	</head>
	<body>

		<form id="form1" action="form-02.php" method="post">
			<div>
				<label for="nom">nom</label><br />
				<input type="text" id="nom" name="nom" placeholder="nom" />
			</div>
			<div>
				<label for="message">message</label><br />
				<textarea id="message" name="message"></textarea>
			</div>
			<div>
				<input type="submit" id="submit" value="envoyer" />
			</div>
		</form>

	</body>
</html>
