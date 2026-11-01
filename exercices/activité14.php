<?php
function calculerMoyenneClasse($etudiants)
{
$somme = 0;

foreach ($etudiants as $etudiant) {
$somme += $etudiant["moyenne"];
}
return $somme / count($etudiants);
}
?>