<?php 

interface ReservableInterface{
  public function reserver( $client,  $dateDebut, int $nbJours);
}

abstract class Vehicule{
  protected $id;
  protected $immatriculation;
  protected $marque;
  protected $modele;
  protected $prixJour;
  protected $disponible;
  public function __construct($immatriculation,$marque,$modele,$prixJour,$disponible){
    $this->immatriculation = $immatriculation;
    $this->marque = $marque;
    $this->modele = $modele;
    $this->prixJour = $prixJour;
    $this->disponible = $disponible;
  }
  public function afficherDetails(){
    echo "immatriculation : $immatriculation marque: $marque modele : $modele prixJour: $prixJour disponible: $disponible";
  }
  public function calculerPrix(int $jours): float{
    $prix = $this->prixJour *$jours ;
    echo "le prix est : $prix ";
  }
  public function 

  estDisponible(): bool{

    if($this->disponible==="disponible"){
      return true;
    }
  }  
  
}
class Voiture extends Vehicule implements ReservableInterface{
  protected $nbPortes;
  protected $transmission;
  public function reserver( $client,  $dateDebut, int $nbJours){}
}
class Moto extends Vehicule implements ReservableInterface{
protected  $cylindree;
public function reserver( $client,  $dateDebut, int $nbJours){}
}
class Camion extends Vehicule implements ReservableInterface{
 protected $capaciteTonnage;
 public function reserver( $client,  $dateDebut, int $nbJours){}
}
abstract class Personne{
  protected $nom;
  protected $prenom;
  protected $email;
  public function __construct($nom,$prenom,$email){
    $this->nom = $nom ;
    $this->prenom = $prenom ;
    $this->email = $email ;
  }
  public function afficherProfil(){
    echo "nom : $nom prenom: $prenom";
  }

}
class Client extends Personne{
protected $numeroClient;
protected $reservations ;
public function __construct($nom,$prenom){
  $this->numeroClient = $numeroClient ;
  $this->reservations = $reservations ;
}
public function ajouterReservation( $reservations){
$this->reservations = $reservations;
}
public function afficherProfil(){
  echo "nom : $nom prenom: $prenom numeroClient: $numeroClient reservations: $reservations";
}
public function getHistorique(){

}
}

class Agence{
  protected $nom;
  protected $ville;
  protected $vehicules;
  protected $clients ;
  public function __construct($nom){
    $this->nom = $nom ;
    $this->ville = $ville ;
    $this->vehicules = $vehicules ;
    $this->clients = $clients ;
  }
  public function ajouterVehicule($vehicules){
$this->vehicules = $vehicule;
  }
  public function rechercherVehiculeDisponible(string $type){
      if($type == $vehicule){
        return $this->vehicules;
      }
  }
  public function enregistrerClient($client){

  }
  public function faireReservation( $clients, $vehicule, $date, $jours){}
}

class Reservation{
  protected $vehicule;
  protected $client;
  protected $dateDebut;
  protected $nbJours;
  protected $statut;

  public function calculerMontant(){
    
  }
  public function confirmer(){

  }
  public function annuler(){

  }
}

// trait LoggerTrait{
//   public function  logAction(string $message){}
// }

// -------------------------------------------------------------

//1 
$ParisAgence = new Agence("ParisAgence","Paris");
$CasablancaAgence = new Agence("CasablancaAgence","casablanca");

//2

$dacia = new Voiture("H2-J3","Dacia","2025",444,"disponible");
$tzx = new Moto("M3-k3","tzx","2025",342,"disponible");
$camionew = new Camion("H2-J909","toyota","2025",3882,"disponible");
//3

$mohamed= new Client("mohamed","foullane","foullane@gmail.com");
$user = new Client("user","userr","user@gmail.com");

$ParisAgence->enregistrerClient($mohamed);
$CasablancaAgence->enregistrerClient($user);

//4 


$réservations1 = $ParisAgence->faireReservation($mohamed, $dacia, "2-3-2025", 10);
$reservations2 = $ParisAgence->faireReservation($user, $dacia, "2-5-2025", 10);

//4 Afficher :
//Les véhicules disponibles

// for ($=0; $i < ; $i++) { 
//   echo "hello";
// }


$ParisAgence->rechercherVehiculeDisponible("Voiture");

//Les profils clients avec historique
$mohamed->afficherProfil();
$mohamed->getHistorique();
$user->afficherProfil();
$user->getHistorique();
