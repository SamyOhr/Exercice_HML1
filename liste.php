<html>
<body>
	<h1>Liste des film</h1>
	<?php
	// Récupérer l'année de recherche
	$ANNEE = $_GET['annee'];

	// Connexion à la BDD
	$base = new PDO('mysql:host=localhost; dbname=id20205701_samy', 'id20205701_samyouicher', '/&*hX18M$A}2#QGr');
	$base->exec("SET CHARACTER SET utf8");

	// Échapper les caractères spéciaux pour éviter les injections SQL
	$ANNEE = $base->quote($ANNEE);

	// Construire la requête SQL
	<p>ANNEE ? <SELECT name="annee">

    <?php


//2° - Préparation de requette et execution
    $retour = $base->query('SELECT DISTINCT annee FROM movies;');

//3° - Lecture du resultat de la requette
    while ($data = $retour->fetch()){
    echo "<option>".$data['annee']."</option>";
    }

    ?>
    </SELECT>
    </p>
</body>
</html>
