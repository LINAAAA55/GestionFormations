<?php
require_once __DIR__ . '/../models/Inscription.php';

$id          = (int)($_GET['id'] ?? 0);
$inscription = $id ? Inscription::getById($id) : null;

if (!$inscription || $inscription['statut_paiement'] !== 'paye') {
    header('Location: index.php?page=paiement&id=' . $id);
    exit();
}

require __DIR__ . '/../views/cours.php';