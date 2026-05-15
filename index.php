<?php
$page = $_GET['page'] ?? 'home';

$allowed = ['home', 'formations', 'inscription', 'paiement', 'succes', 'cours'];
if (!in_array($page, $allowed)) $page = 'home';

require_once 'views/partials/header.php';

match ($page) {
    'home'        => require 'controllers/HomeController.php',  
    'formations'  => require 'controllers/FormationController.php',
    'inscription' => require 'controllers/InscriptionController.php',
    'paiement'    => require 'controllers/PaiementController.php',
    'succes'      => (function() { require 'views/succes.php'; })(),
    'cours'       => require 'controllers/CoursController.php',
};

require_once 'views/partials/footer.php';