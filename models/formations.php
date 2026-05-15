<?php
require_once __DIR__ . '/Database.php';

class Formation {
    public static function getAll(): array {
        $pdo = Database::getInstance();
        $stmt = $pdo->query('SELECT * FROM formations ORDER BY id ASC');
        return $stmt->fetchAll();
    }

    public static function getById(int $id) {
        $pdo = Database::getInstance();
        $stmt = $pdo->prepare('SELECT * FROM formations WHERE id = ?');
        $stmt->execute([$id]);
        return $stmt->fetch();
    }
}