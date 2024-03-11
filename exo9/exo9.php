<h1>Exercice 9</h1>

<p>Nous souhaitons savoir si une personne est imposable en fonction de son âge et de son sexe.</p>

<?php

$age = 18;
$sexe = "M";

echo nl2br("\n Age : $age");
echo nl2br("\n Sexe : $sexe");

//If she's a woman and she's between 18 and 35 years old, then she's taxable, otherwise she wouldn't.
if ($sexe == "F") {
    if ($age >= 18 && $age <= 35) {
        echo nl2br("\n La personne est imposable.");
    }
    else{
        echo nl2br("\n La personne est pas imposable.");
    }
}

//If it's a man and he's over 20 years old, he's taxable, otherwise he doesn't.
if ($sexe == "M") {
    if ($age >= 20) {
        echo nl2br("\n La personne est imposable.");
    }
    else{
        echo nl2br("\n La personne est pas imposable.");
    }
}

?>