<h1>Exercice 3</h1>

<p>Ecrire un algorithme permettant de remplacer le mot « aujourd'hui » pars « demain » </p>

<?php

//Replace today, not tomorrow using str_replace.
$phrase = "Notre formation DL commence aujourd'hui";
$phrasereplace = str_replace("aujourd'hui", "demain", $phrase);

echo "« $phrase »";
echo "<br>";
echo "« $phrasereplace »";

?>