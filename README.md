TP Système Complet de Gestion d’une Agence de Location de Véhicules (Back-end en PHP POO)
⏰ Durée : 2 heures
🧑‍💻 Niveau : Confirmé – Application complète modulaire
🧩 Concepts abordés :
Classes / Objets


Héritage


Polymorphisme


Encapsulation


Abstraction (classes abstraites, interfaces)


Traits


Relation 1-N, N-N (composition)


Logique métier répartie (Responsabilité unique)



📘 Contexte :
Une grande agence de location gère plusieurs agences régionales, chaque agence a un parc de véhicules composé de voitures, motos et camions. Chaque client peut effectuer plusieurs réservations. Un système de gestion back-end en PHP orienté objet est à développer.
Le but est de créer une base de code modulaire, extensible, et fortement typée.

🧱 Structure des classes demandée :
🎯 Partie 1 – Abstraction & Interfaces
Interface ReservableInterface


public function reserver(Client $client, DateTime $dateDebut, int $nbJours): Reservation;


Classe abstraite Vehicule


Attributs protégés : id, immatriculation, marque, modele, prixJour, disponible


Méthodes :


afficherDetails()


calculerPrix(int $jours): float


estDisponible(): bool


Méthodes abstraites : getType(): string



🧿 Partie 2 – Héritage et spécialisation
Classes concrètes : Voiture, Moto, Camion


Attributs spécifiques :


Voiture: nbPortes, transmission


Moto: cylindree


Camion: capaciteTonnage


Implémentent ReservableInterface


Redéfinir getType() et afficherDetails()



🧑‍🤝‍🧑 Partie 3 – Client et Personne
Classe abstraite Personne


Attributs : nom, prenom, email


Méthode abstraite afficherProfil()


Classe Client hérite de Personne


Attributs : numeroClient, reservations (tableau)


Méthodes :


ajouterReservation(Reservation $r)


afficherProfil() (override)


getHistorique()



🧾 Partie 4 – Agence & Réservation
Classe Agence


Attributs :


nom, ville, vehicules (tableau), clients (tableau)


Méthodes :


ajouterVehicule(Vehicule $v)


rechercherVehiculeDisponible(string $type)


enregistrerClient(Client $c)


faireReservation(Client $client, Vehicule $v, DateTime $dateDebut, int $nbJours): Reservation


Classe Reservation


Attributs :


vehicule, client, dateDebut, nbJours, statut


Méthodes :


calculerMontant()


confirmer(), annuler()



🧰 Partie 5 – Trait + Logger
Trait LoggerTrait


Méthode logAction(string $message)


Utilisé dans Agence et Reservation pour journaliser les actions importantes


Classe statique Logger (optionnel)


Singleton pour écrire dans un fichier .log



🔁 Scénario d'exécution attendu
Créer deux agences différentes (Paris, Casablanca)


Ajouter plusieurs véhicules (Voitures, Motos, Camions) à chaque agence


Créer 2 clients et les enregistrer


Simuler plusieurs réservations (réussies, refusées)


Afficher :


Les véhicules disponibles


Les profils clients avec historique


Les détails des réservations (montant, dates, véhicules)


Le journal des actions (bonus)



🧪 Contraintes Techniques
Utilisation du typage strict declare(strict_types=1)


Respect des bonnes pratiques SOLID (au minimum SRP)


Organisation des classes dans des fichiers séparés


Pas de base de données (les données sont simulées en PHP)



📄 Livrables
Code source complet avec arborescence propre


Fichier UML (fait main ou outil)


Fichier README.md ou main.php avec script de test

