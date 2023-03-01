<!DOCTYPE html>
<html>
<body>
<h1>Liste des films</h1>
<?php
// Connexion à la BDD avec PDO
$base = new PDO('mysql:host=localhost; dbname=id20205701_samy', 'id20205701_samyouicher', '/&*hX18M$A}2#QGr');
$base->exec("SET CHARACTER SET utf8");

// Récupérer l'année de recherche depuis le formulaire
$ANNEE = $_GET['annee'];

// Échapper les caractères spéciaux pour éviter les injections SQL
$ANNEE = $base->quote($ANNEE);

// Construire la requête SQL
$sql = "SELECT titre FROM movies WHERE annee = $ANNEE";

// Exécuter la requête SQL
$result = $base->query($sql);

// Vérifier si des résultats ont été trouvés
if ($result->rowCount() > 0) {
  // Afficher les résultats sous forme de liste
  echo "<ul>";
  while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
    echo "<li>" . $row["titre"] . "</li>";
  }
  echo "</ul>";
} else {
  echo "Aucun film trouvé pour l'année $ANNEE";
}

// Fermer la connexion à la base de données
$base = null;
?>
</body>
</html>
