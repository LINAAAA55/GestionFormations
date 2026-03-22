<?php  

$utilisateur = [
    "nom" => "Barhoumi",
    "prenom" => "Lina",
    "email" => "lina.barhoumi@edu.isetcom.tn",
    "formation" => "GTIC",
    "age" => 20
];

// Vérification de l'âge
if (is_numeric($utilisateur["age"]) && $utilisateur["age"] > 0) {

    echo "Nom : " . $utilisateur["nom"] . "\n";
    echo "Prénom : " . $utilisateur["prenom"] . "\n";
    echo "Email : " . $utilisateur["email"] . "\n";
    echo "Formation : " . $utilisateur["formation"] . "\n";
    echo "Âge : " . $utilisateur["age"] . "\n\n";

    echo "Bienvenue " . $utilisateur["prenom"] . " " . $utilisateur["nom"];

} else {

    echo "Erreur : L'âge doit être un nombre supérieur à 0.";

}

?>