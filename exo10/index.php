<h1>Exercice 10</h1>

<p>Ecrire un algorithme qui affiche à un utilisateur un rendu de monnaie en nombre de billets de 10€ et 5€, de pièce de 2€ et 1€.</p>

<?php

$bill10 = 0;
$bill5 = 0;
$coin2 = 0;
$coin1 = 0;
    
$price = 152;
$versed = 152;

//If the person has given more than the price, look at how many 10, 5 bills and how many 2, 1 coins need to be returned.
$remainder = $versed - $price;
$amout = $versed - $price;

while ($amout >= 10) {
    $bill10++;
    $amout -= 10;
}

while ($amout >= 5) {
    $bill5++;
    $amout -= 5;
}

while ($amout >= 2) {
    $coin2++;
    $amout -= 2;
}

while ($amout >= 1) {
    $coin1++;
    $amout -= 1;
}

echo nl2br("\n Montant à payer : $price €");
echo nl2br("\n Montant versé : $versed €");
echo nl2br("\n Reste à payer : $remainder €");
echo nl2br("\n *********************************************************");
echo nl2br("\n Rendu de monnaie :");
echo nl2br("\n $bill10 billets de 10 € | $bill5 billet de 5 € | $coin2 pièce de 2 € | $coin1 pièce de 1 €");

?>