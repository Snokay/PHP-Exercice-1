<h1>Exercice 13</h1>

<p>Calculer la moyenne générale d'un élève sont les notes sont renseignées dans un tableur. Elle devra être affichée avec 2 décimales.</p>

<?php
    $notes = [10, 12, 8, 19, 3, 16, 11, 13, 9];
    $moyenne = 0;

    //We retrieve each note from the table to display them and add them up to recover the average.
    echo "Les notes obtenues par l'élève sont : ";
    for ($i = 0; $i < count($notes); $i++) {
        echo "$notes[$i] ";
        $moyenne += $notes[$i];
    }

    //We retrieve the average to divide it by the number of grades to recover the overall average.
    echo nl2br("\nSa moyenne générale est donc de : " . number_format($moyenne / count($notes), 2, '.', ' '));
?>