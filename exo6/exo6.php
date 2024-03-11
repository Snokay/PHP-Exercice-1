<h1>Exercice 6</h1>

<p>Ecrire un algorithme permettant de calculer un montant de facture à régler</p>

<?php

$price = 9.99;
$tva = 20/100;
$units = 5;

//We calculate the amount of VAT by fessing price x quantity x% VAT and then we calculate the price with VAT by fessing price x quantity + amount of VAT.
$montanttva = $price * $units * $tva;
$montant = $price * $units + $montanttva;

echo "Prix unitaire de l'article : $price";
echo "<br>";
echo "Quantité : $units";
echo "<br>";
echo "Taux de TVA : $tva";
echo "<br>";
echo "Le montant de la facture à régler est de : " . number_format($montant, 2, '.', ' ') . " €";

?>