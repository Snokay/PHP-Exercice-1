<h1>Exercice 14</h1>

<p>Calculer l'âge exact d'une personne à partir de sa date de naissance (en années, mois, jour).</p>

<?php

//function calculate_age calculates the difference between the date of birth and today's date.
function calculate_age($date) {
    $today = new DateTime();
    $datedif = $today->diff($date);
    
    $year = $datedif->y;
    $month = $datedif->m;
    $day = $datedif->d;
    
    return array($year, $month, $day);
}

$date = new DateTime('1985-01-17');
$age = calculate_age($date);
//Once the calculation has been made, the year, month, and day of the person can be retrieved from the array.
echo "Age de la personne : " . $age[0] . " ans, " . $age[1] . " mois, " . $age[2] . " jours.";

?>