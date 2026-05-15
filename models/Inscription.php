<?php
require_once __DIR__ . '/Database.php';

class Inscription {
    public static function create(string $nom, string $prenom, string $email, int $formation_id): int {
        $pdo = Database::getInstance();
        $stmt = $pdo->prepare(
            'INSERT INTO inscriptions (nom, prenom, email, formation_id, statut_paiement, date_inscription)
             VALUES (?, ?, ?, ?, "en_attente", NOW())'
        );
        $stmt->execute([$nom, $prenom, $email, $formation_id]);
        return (int) $pdo->lastInsertId();
    }

    public static function getById(int $id) {
        $pdo = Database::getInstance();
        $stmt = $pdo->prepare(
            'SELECT i.*, f.titre AS formation_titre, f.prix
             FROM inscriptions i
             JOIN formations f ON i.formation_id = f.id
             WHERE i.id = ?'
        );
        $stmt->execute([$id]);
        return $stmt->fetch();
    }

    public static function updateStatut(int $id, string $statut): void {
        $pdo = Database::getInstance();
        $stmt = $pdo->prepare('UPDATE inscriptions SET statut_paiement = ? WHERE id = ?');
        $stmt->execute([$statut, $id]);
    }
}