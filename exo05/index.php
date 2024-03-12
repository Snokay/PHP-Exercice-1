<h1>Exercice 5</h1>

<p>Ecrire un algorithme qui déclare une valeur en franc et qui la convertit en euros</p>

<?php

"6,55957 FRF = 1 euro";

//We convert our French francs into € to do this, we get how many francs = 1€ and then we make the number of francs / 6.55957 (1€ in franc).
$franc = 100;
$convert = number_format($franc/6.55957, 2, ',', ' ');
$phrasefranc = "Montant en francs : $franc";
$phraseeuro = "100 francs = $convert";

echo "$phrasefranc";
echo "<br>";
echo "$phraseeuro";

?>