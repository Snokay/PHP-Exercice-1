<h1>Exercice 11</h1>

<p>Ecrire un algorithme permettant de parcourir ce tableau et d'en afficher le contenus (une marque de voiture pars ligne).</p>

<?php
    
$marques = ["Peugeot", "Renault", "BMW", "Mercedes"];

echo "Il y a " . count($marques) . " marques de voitures dans le tableau :";

//For each car brand in the table display on screen in a list tag and move on to the next.
for ($i = 0; $i < count($marques); $i++) {
    echo nl2br("<li>$marques[$i]</li>");
}

?>