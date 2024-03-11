<h1>Exercice 7</h1>

<p>Ecrire un algorithme permettant de renvoyer la catégorie d'un enfant en fonction de son âge</p>

<?php

"Poussin : entre 6 et 7 ans";
"Pupille : entre 8 et 9 ans";
"Minime : entre 10 et 11 ans";
"Cadet : à partir de 12 ans";

$childage = 7;

//We retrieve the age of the child and follow his age he is in one of the 4 categories proposed.
if ($childage >= 12){
  echo "L'enfant qui a $childage ans appartient appartient à la catégorie « Cadet »";
}

elseif ($childage >= 10){
    echo "L'enfant qui a $childage ans appartient appartient à la catégorie « Minime »";
}

elseif ($childage >= 8){
    echo "L'enfant qui a $childage ans appartient appartient à la catégorie « Pupille »";
}

elseif ($childage >= 6){
    echo "L'enfant qui a $childage ans appartient appartient à la catégorie « Poussin »";
}

?>