<h1>Exercice 4</h1>

<p>Ecrire un algorithme permettant de savoir si une phrase est palindrome</p>

<?php

$phrase = "Engage le jeu que je le gagne";

//We remove the spaces from the sentence and the capital letters and then we reverse the sentence if the two sentences are the same then it's a palindrome.
$phrasenospace = strtolower(str_replace(" ", "", $phrase));
$reverse = strrev($phrasenospace);

echo "$phrasenospace";
echo "<br>";
echo "$reverse";
echo "<br>";

if ($reverse == $phrasenospace) {
    echo "la phrase « $phrase » est palindrome";
}

?>