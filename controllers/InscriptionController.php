<?php
require_once __DIR__ . '/../models/formations.php';
require_once __DIR__ . '/../models/Inscription.php';

$erreurs = [];
$formation_id = (int)($_GET['formation_id'] ?? 0); 

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nom          = trim($_POST['nom'] ?? '');
    $prenom       = trim($_POST['prenom'] ?? '');
    $email        = trim($_POST['email'] ?? '');
    $formation_id = (int)($_POST['formation_id'] ?? 0);

    if (!$nom)    $erreurs[] = 'Le nom est requis.';
    if (!$prenom) $erreurs[] = 'Le prénom est requis.';
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) $erreurs[] = 'Email invalide.';
    if ($formation_id <= 0) $erreurs[] = 'Veuillez choisir une formation.';

    if (empty($erreurs)) {
        $id = Inscription::create($nom, $prenom, $email, $formation_id);
        header('Location: index.php?page=paiement&id=' . $id);
        exit();
    }
}

$formations = Formation::getAll();
require __DIR__ . '/../views/inscription.php';