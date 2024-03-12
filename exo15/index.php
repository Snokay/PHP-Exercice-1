<h1>Exercice 15</h1>

<p>Créer une classe personne(nom, prénom et date de naissance), instancier 2 personnes et afficher leurs informations: nom, prénoms et âge.</p>

<?php

class Character {
    private $lastname;
    private $firstname;
    private $date;

    //function __construct is the constructor it is intended to construct an instance.
    public function __construct($lastname, $firstname, $date) {
        $this->lastname = $lastname;
        $this->firstname = $firstname;
        $this->date = $date;
    }

    //function age retrieves today's date and the date of birth of the character to make the difference between the two and retrieve the year (age) of the person.
    public function age(){
        $today = new DateTime();
        $date = new DateTime($this->date);
        $age = $today->diff($date)->y;
        return $age;
    }

    //function informations allows you to view the Create character's information on the page.
    public function informations(){
        $age = $this->age();
        echo $this->firstname . " " . $this->lastname . " a " . $age . " ans<br>";
    }
}
    
$p1 = new Character("DUPONT", "Michel", "1980-02-19");
$p2 = new Character("DUCHEMIN", "Alice", "1985-01-17");

$p1->informations();
$p2->informations();

?>