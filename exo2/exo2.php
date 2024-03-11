<h1>Exercice 2</h1>

<p>Ecrire un algorithme permettant de compter le nombre de mots</p>

<?php

//Retrieve by str_word_count the number of words in a sentence.
$phrase = "Notre formation DL commence aujourd'hui";
$nbCaracteres = str_word_count($phrase);
echo "La phrase « $phrase » contient $nbCaracteres mots ";

?>