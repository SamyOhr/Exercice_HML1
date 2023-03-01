<!DOCTYPE html>
<html>
<head>
	<title>Liste des films</title>
</head>
<body>
	<h1>Liste des films de l'année <?php echo $_GET['ANNEE']; ?></h1>
	<?php
		// Connexion à la base de données
		$base = new PDO('mysql:host=localhost; dbname=id20205701_samy', 'id20205701_samyouicher', '/&*hX18M$A}2#QGr');
		$base->exec("SET CHARACTER SET utf8");
		
		// Requête pour récupérer les films de l'année sélectionnée
		$retour = $base->prepare('SELECT * FROM movies WHERE annee = :ANNEE ORDER BY titre;');
		$retour->execute(array('ANNEE' => $_GET['ANNEE']));
		
		// Vérification s'il y a des résultats
		if ($retour->rowCount() > 0) {
			echo '<ul>';
			// Boucle pour afficher les résultats
			while ($data = $retour->fetch()) {
				echo '<li>' . $data['titre'] . ' (' . $data['annee'] . ')</li>';
			}
			echo '</ul>';
		} else {
			echo '<p>Aucun film disponible pour l\'année sélectionnée.</p>';
		}
		
		// Fermeture de la connexion à la base de données
		$base = null;
	?>
</body>
</html
