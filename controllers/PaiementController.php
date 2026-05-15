<?php
require_once __DIR__ . '/../models/Inscription.php';

$id          = (int)($_GET['id'] ?? 0);
$inscription = $id ? Inscription::getById($id) : null;

if (!$inscription) {
    header('Location: index.php');
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    Inscription::updateStatut($id, 'paye');
    header('Location: index.php?page=succes&id=' . $id);
    exit();
}

require __DIR__ . '/../views/paiment.php';