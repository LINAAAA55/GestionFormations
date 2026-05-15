<?php
require_once __DIR__ . '/../models/Inscription.php';
$id          = (int)($_GET['id'] ?? 0);
$inscription = $id ? Inscription::getById($id) : null;
?>
<div class="succes-box">
    <div class="succes-icon">✅</div>
    <h2>Paiement confirmé !</h2>
    <?php if ($inscription): ?>
        <p>Merci <strong><?= htmlspecialchars($inscription['prenom']) ?></strong>, votre inscription à</p>
        <p><strong><?= htmlspecialchars($inscription['formation_titre']) ?></strong> est validée.</p>
    <?php endif; ?>
    <div class="succes-actions">
        <a href="index.php?page=cours&id=<?= $id ?>" class="btn">Accéder aux cours →</a>
        <a href="index.php?page=formations" class="btn btn-outline">Voir d'autres formations</a>
    </div>
</div>