<?php
function filtrerParMoyenne($etudiants, $moyenneMinimale)
{
$resultat = [];

foreach ($etudiants as $etudiant) {
if ($etudiant["moyenne"] >= $moyenneMinimale) {
$resultat[] = $etudiant;
}
}
return $resultat;
}
?>