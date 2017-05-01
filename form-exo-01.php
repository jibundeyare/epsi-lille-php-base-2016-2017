<?php

// Vous pouvez vous servir des scripts suivants comme référence :
// - form-01.php
// - form-02.php
// - pdo-01.php
//
// Ajoutez dans le script actuel (form-exo-01.php) un formulaire qui affiche les champs suivants :
// - titre (champ input de type texte)
// - texte (champ textarea)
// - auteur (champ input de type texte)
//
// Le formulaire doit envoyer les données à un autre script nommé form-exo-02.php.
//
// Le script form-exo-02.php doit effectuer les validations suivantes :
// - le titre fait maximum 100 caractères
// - le texte fait maximum 1000 caractères
// - l'auteur fait maximum 100 caractères
//
// Si une erreur a eu lieu, le script doit l'afficher.
// Sinon si aucune erreur n'a eu le script doit enregistrer les données du formulaire en base de données et afficher un message de confirmation.

?><!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8" />
		<title>form</title>
	</head>
	<body>

		<form id="form1" action="form-exo-02.php" method="post">
			<div>
				<label for="titre">titre</label><br />
				<input type="text" id="titre" name="titre" placeholder="titre" />
			</div>
			<!-- complétez ici avec les autres champs -->
			<div>
				<input type="submit" id="submit" value="envoyer" />
			</div>
		</form>

	</body>
</html>
