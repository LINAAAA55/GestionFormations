<h1 class="page-title">Paiement</h1>
<p class="page-subtitle">Finalisez votre inscription en complétant le paiement.</p>

<div class="form-wrap">
    <div class="payment-summary">
        <div class="info">
            <strong><?= htmlspecialchars($inscription['formation_titre']) ?></strong>
            Bonjour <?= htmlspecialchars($inscription['prenom'] . ' ' . $inscription['nom']) ?>
        </div>
        <div class="amount"><?= number_format($inscription['prix'], 2, ',', ' ') ?> DT</div>
    </div>

    <div class="form-card">
        <form method="POST" action="index.php?page=paiement&id=<?= $inscription['id'] ?>">
            <div class="form-group">
                <label>Numéro de carte</label>
                <div class="card-input-group">
                    <span class="card-icon">💳</span>
                    <input type="text" placeholder="1234 5678 9012 3456" maxlength="19">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group">
                    <label>Expiration</label>
                    <input type="text" placeholder="MM/AA" maxlength="5">
                </div>
                <div class="form-group">
                    <label>CVV</label>
                    <input type="text" placeholder="123" maxlength="3">
                </div>
            </div>

            <div class="form-footer">
                <a href="index.php?page=formations" class="btn btn-outline">← Annuler</a>
                <button type="submit" class="btn btn-success">Confirmer le paiement →</button>
            </div>
        </form>
    </div>
</div>