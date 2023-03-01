<p>ANNEE ? <SELECT name="annee">
<?php
//Lister le contenu de la table movies
//1° - Connexion à la BDD
$base = new PDO('mysql:host=localhost; dbname=id20205701_samy', 'id20205701_samyouicher', '/&*hX18M$A}2#QGr');
$base->exec("SET CHARACTER SET utf8");

//2° - Préparation de requette et execution
$retour = $base->query('SELECT DISTINCT annee FROM movies;');

//3° - Lecture du resultat de la requette
while ($data = $retour->fetch()){
echo "<option>".$data['annee']."</option>";
}

?>
</SELECT>
</p>