<?php
function obtenirAdmis($etudiants)
{
$admis = [];

foreach ($etudiants as $etudiant) {
if ($etudiant["moyenne"] >= 10) {
$admis[] = $etudiant;
}
}
return $admis;
}
?>
