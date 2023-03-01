<?php
// Récupérer l'année sélectionnée dans le menu déroulant
$annee = $_GET['annee'];

// Connexion à la BDD
$base = new PDO('mysql:host=localhost; dbname=id20205701_samy', 'id20205701_samyouicher', '/&*hX18M$A}2#QGr');
$base->exec("SET CHARACTER SET utf8");

// Préparation de la requête et exécution
$requete = $base->prepare('SELECT * FROM movies WHERE annee = :annee');
$requete->bindParam(':annee', $annee);
$requete->execute();

// Affichage des résultats
while ($data = $requete->fetch()){
	echo $data['titre'].' - '.$data['realisateur'].' - '.$data['annee'].'<br>';
}
?>
