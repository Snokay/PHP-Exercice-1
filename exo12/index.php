<h1>Exercice 12</h1>

<p>A partir d'une fonction personnalisée et à partir d'un tableau de prénoms et de langue associée, dire bonjour aux différentes personnes dans leur langue respective.</p>

<?php
    
function characterHello($characterLanguage) {
    $hello = array(
        "français" => "Salut",
        "espagnol" => "Hola",
        "anglais" => "Hello",
    );

    echo nl2br("Salutations suivant leur langue :\n");
    
    //For each character we check if he has a name + a language if yes then we display the name of that language and his name to display it.
    foreach ($characterLanguage as $character => $language) {
        if (array_key_exists($language, $hello)) {
            echo nl2br($hello[$language] . ", " . $character . "!\n");
        } else {
            echo nl2br("Langue inconnue pour " . $character . ": " . $language . "\n");
        }
    }

    echo nl2br("\nSalutations suivant leur langue en ordre alphabétique :\n");

    //We do the same thing just before we use a ksort to put them in alphabetical order.
    ksort($characterLanguage);
    foreach ($characterLanguage as $character => $language) {
        if (array_key_exists($language, $hello)) {
            echo nl2br($hello[$language] . ", " . $character . "!\n");
        } else {
            echo nl2br("Langue inconnue pour " . $character . ": " . $language . "\n");
        }
    }
}

    $characterLanguage = array(
        "Mickaël" => "français",
        "Virgile" => "espagnol",
        "Marie-Claire" => "anglais",
    );

    characterHello($characterLanguage);
?>