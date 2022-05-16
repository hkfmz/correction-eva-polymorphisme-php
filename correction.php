<?php

abstract class Personne{
    protected $nom;
    protected $prenom;
    protected $dateNaissance;

    public function __construct($nom, $prenom, $dateNaissance){
        $this->setNom($nom);
        $this->setPrenom($prenom);
        $this->setDateNaissance($dateNaissance);
    }
    //nom
    public function getNom(){
        return $this->nom;
    }
    public function setNom($nom){
        $this->nom = $nom;
    }

    //prenom
    public function getPrenom(){
        return $this->prenom;
    }
    public function setPrenom($prenom){
        $this->prenom = $prenom;
    }

    //date de naissance
    public function getDateNaissance(){
        return $this->dateNaissance;
    }
    public function setDateNaissance($dateNaissance){
        $this->dateNaissance = $dateNaissance;
    }

    public function afficher(){
        echo "Nom: ".$this->getNom()." <br>";
        echo "Prenom: ".$this->getPrenom()." <br>";
        echo "Date de naissance: ".$this->getDateNaissance()." <br>";
        echo "------------------------------------<br>";
    }
}

class Employee extends Personne{
    private $salaire;

    public function __construct($nom, $prenom, $dateNaissance, $salaire){
        Parent::__construct($nom, $prenom, $dateNaissance);
        $this->setSalaire($salaire);
    }

    //salaire
    public function getSalaire(){
        return $this->salaire." €";
    }
    public function setSalaire($salaire){
        $this->salaire = $salaire;
    }

    public function afficher(){
        echo "Nom: ".$this->getNom()." <br>";
        echo "Prenom: ".$this->getPrenom()." <br>";
        echo "Date de naissance: ".$this->getDateNaissance()." <br>";
        echo "Salaire: ".$this->getSalaire()." <br>";
        echo "------------------------------------<br>";
    }
}

class Chef extends Employee{
    private $service;

    public function __construct($nom, $prenom, $dateNaissance, $salaire, $service){
        Parent::__construct($nom, $prenom, $dateNaissance, $salaire);
        $this->setService($service);
    }

    //service
    public function getService(){
        return $this->service;
    }
    public function setService($service){
        $this->service = $service;
    }

    public function afficher(){
        echo "Nom: ".$this->getNom()." <br>";
        echo "Prenom: ".$this->getPrenom()." <br>";
        echo "Date de naissance: ".$this->getDateNaissance()." <br>";
        echo "Salaire: ".$this->getSalaire()." <br>";
        echo "Service: ".$this->getService()." <br>";
        echo "------------------------------------<br>";
    }
}

class Directeur extends Chef{
    private $societe;

    public function __construct($nom, $prenom, $dateNaissance, $salaire, $service, $societe){
        Parent::__construct($nom, $prenom, $dateNaissance, $salaire, $service);
        $this->setSociete($societe);
    }

    //societe
    public function getSociete(){
        return $this->societe;
    }
    public function setSociete($societe){
        $this->societe = $societe;
    }

    public function afficher(){
        echo "Nom: ".$this->getNom()." <br>";
        echo "Prenom: ".$this->getPrenom()." <br>";
        echo "Date de naissance: ".$this->getDateNaissance()." <br>";
        echo "Salaire: ".$this->getSalaire()." <br>";
        echo "Service: ".$this->getService()." <br>";
        echo "Société: ".$this->getSociete()." <br>";
        echo "------------------------------------<br>";
    }
}

// 5 Employées
$emp1 = new Employee("Cozic", "Julien", "17/05/1994", 4500);
$emp2 = new Employee("Nebra", "Matthieu", "10/11/1977", 7500);
$emp3 = new Employee("Antoine", "Phillippe", "20/01/1997", 9500);
$emp4 = new Employee("De Mongreville", "Cyril", "18/07/1995", 7500);
$emp5 = new Employee("Kamara", "Ibrahim", "06/06/1991", 6500);

//2 Chefs
$Chef1 = new Chef("Ysuf", "Abdul", "07/07/1995", 5500, "Directeur RH");
$Chef2 = new Chef("Tengue", "Evelain", "23/03/1990", 7000, "Directeur générale");

//1 Directeur
$directeur = new Directeur("B.","Axelle", "21/12/1992", 10000, "PDG", "Axelle-Telecom SARL");

$emp1->afficher();
$emp2->afficher();
$emp3->afficher();
$emp4->afficher();
$emp5->afficher();
$Chef1->afficher();
$Chef2->afficher();
$directeur->afficher();

echo "<br><br>";
// Tableau
$tableau = [$emp1, $emp2, $emp3, $emp4, $emp5, $Chef1, $Chef2, $directeur];

//Boucle For
for($i = 0; $i < count($tableau); $i++){
    print_r($tableau[$i]);
}

echo "<br><br>";
// Boucle Foreach
foreach($tableau as $user => $value){
    print_r($value);
} 

?>