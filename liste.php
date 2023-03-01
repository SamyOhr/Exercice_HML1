<html>
<body>
<h1>Liste des films</h1>
<?php
//Lister le contenu de la table movies
//1° - Connexion à la BDD
$base = new PDO('mysql:host=localhost; dbname=id20215400_cnamgreta', 'id20205701_samy', 'mc9?JtjB%E*#os86');
$base->exec("SET CHARACTER SET utf8");
echo 'coucou';
//2° - Préparation de requête et exécution
$retour = $base->query('SELECT * FROM movies;');

//3° - Lecture du résultat de la requête
while ($data = $retour->fetch()){
echo $data['id']." ".$data['titre']." ".$data['genre']." ".$data['annee']."</br>";
}

?>

</body>
</html>