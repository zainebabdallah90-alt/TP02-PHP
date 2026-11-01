<?php
function determinerResultat($moyenne)
{
if ($moyenne >= 10) {
return "Admis";
}
return "Ajourné";
}
function appreciation($moyenne)
{
if ($moyenne < 10) {
return "Insuffisant";
} elseif ($moyenne < 12) {
return "Passable";
} elseif ($moyenne < 14) {
return "Assez bien";
} elseif ($moyenne < 16) {
return "Bien";
}

return "Très bien";
}
?>