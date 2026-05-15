<?php
require_once __DIR__ . '/../models/formations.php';
$formations = Formation::getAll();
require __DIR__ . '/../views/formations.php';