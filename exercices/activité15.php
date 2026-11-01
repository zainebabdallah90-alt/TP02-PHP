<?php
function rechercherEtudiant($etudiants, $nom)
{
foreach ($etudiants as $etudiant) {
if ($etudiant["nom"] === $nom) {
return $etudiant;
}
}

return null;
}
?>
