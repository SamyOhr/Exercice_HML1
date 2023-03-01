<p>ANNEE ? <SELECT name="annee">

<?php

$retour = $base->query('SELECT DISTINCT annee FROM movies;');

while ($data = $retour->fetch()){
echo "<option>".$data['annee']."</option>";
}

?>
</SELECT>
</p>