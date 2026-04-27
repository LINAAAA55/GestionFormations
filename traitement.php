<?php
require "includes/fonctions.php";
require "includes/validation.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nom = trim($_POST["nom"] ?? "");
    $prenom = trim($_POST["prenom"] ?? "");
    $email = trim($_POST["email"] ?? "");

    $erreur = validerFormulaire($nom, $prenom, $email);

    if (!empty($erreur)) {
        echo afficherErreur($erreur);
    } else {
        echo afficherSucces($nom, $prenom, $email);
    }
}
?>