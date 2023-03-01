<!DOCTYPE html>
<html>
<body>
<h1>Liste des films</h1>
<?php
// Connexion à la BDD avec PDO
$base = new PDO('mysql:host=localhost; dbname=id20205701_samy', 'id20205701_samyouicher', '/&*hX18M$A}2#QGr');
$base->exec("SET CHARACTER SET utf8");

// Vérifier si l'année a été spécifiée dans la requête GET
if (isset($_GET['ANNEE'])) {
    $ANNEE = $_GET['ANNEE'];
    
    // Se connecter à la base de données
    $base = new PDO('mysql:host=localhost; dbname=id20205701_samy', 'id20205701_samyouicher', '/&*hX18M$A}2#QGr');
    $base->exec("SET CHARACTER SET utf8");
    
    // Échapper les caractères spéciaux pour éviter les injections SQL
    $ANNEE = $base->quote($ANNEE);
    
    // Récupérer la liste des films de l'année spécifiée
    $films = $base->query("SELECT titre FROM movies WHERE annee = $ANNEE;");
    
    // Afficher la liste des films
    if ($films->rowCount() > 0) {
        echo "<ul>";
        while ($film = $films->fetch()) {
            echo "<li>" . $film['titre'] . "</li>";
        }
        echo "</ul>";
    } else {
        echo "Aucun film trouvé pour l'année $ANNEE";


// Fermer la connexion à la base de données
$base = null;
?>
</body>
</html>
