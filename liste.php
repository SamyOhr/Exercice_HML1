<?php
//Lister le contenu de la table movies
//1° - Connexion à la BDD
$base = new PDO('mysql:host=localhost; dbname=id20205701_samy', 'id20205701_samyouicher', '/&*hX18M$A}2#QGr');
$base->exec("SET CHARACTER SET utf8");

// Récupérer les années disponibles dans la base de données
$annees = array();
$retour = $base->query('SELECT DISTINCT annee FROM movies;');
while ($data = $retour->fetch()){
    $annees[] = $data['annee'];
}

// Récupérer l'année de recherche
$ANNEE = isset($_GET['ANNEE']) ? $_GET['ANNEE'] : '';

// Échapper les caractères spéciaux pour éviter les injections SQL
$ANNEE = mysqli_real_escape_string($conn, $ANNEE);

// Construire la requête SQL
$sql = "SELECT titre FROM films WHERE annee = $ANNEE";

// Exécuter la requête SQL
$result = mysqli_query($conn, $sql);

// Vérifier si des résultats ont été trouvés
if (mysqli_num_rows($result) > 0) {
  // Afficher les résultats sous forme de liste
  echo "<ul>";
  while ($row = mysqli_fetch_assoc($result)) {
    echo "<li>" . $row["titre"] . "</li>";
  }
  echo "</ul>";
} else {
  echo "Aucun film trouvé pour l'année $ANNEE";
}

// Fermer la connexion à la base de données
mysqli_close($conn);
?>
