<h1>Exercice 8</h1>

<p>Ecrire un algorithme qui renvoie la table de multiplication d'un nombre passé en paramètre sous la forme:</p>

<?php

$number = 7;
$i = 1;

echo nl2br("Table de $number en boucle while :\n");

//Create a while loop that multiplies the mathematical table for the number it gives.
while ($i <= 10) {
    echo nl2br("\n $i x $number = " . $i * $number);
    $i++;
}

echo nl2br("\n\n Table de $number en boucle for : \n");

//Same thing but with a for loop this time.
for ($i = 1; $i <= 10; $i++) {
    echo nl2br("\n $i x $number = " . $i * $number);
}

?>