<h1 class="page-title">Inscription</h1>
<p class="page-subtitle">Remplissez le formulaire pour réserver votre place.</p>

<div class="form-wrap">
    <div class="form-card">

        <?php if (!empty($erreurs)): ?>
            <div class="alert alert-error">
                <strong>Erreurs détectées :</strong>
                <ul>
                    <?php foreach ($erreurs as $e): ?>
                        <li><?= htmlspecialchars($e) ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endif; ?>

        <form method="POST" action="index.php?page=inscription">
            <div class="form-row">
                <div class="form-group">
                    <label>Nom *</label>
                    <input type="text" name="nom"
                           value="<?= htmlspecialchars($_POST['nom'] ?? '') ?>" required>
                </div>
                <div class="form-group">
                    <label>Prénom *</label>
                    <input type="text" name="prenom"
                           value="<?= htmlspecialchars($_POST['prenom'] ?? '') ?>" required>
                </div>
            </div>

            <div class="form-group">
                <label>Email *</label>
                <input type="email" name="email"
                       value="<?= htmlspecialchars($_POST['email'] ?? '') ?>" required>
            </div>

            <div class="form-group">
                <label>Formation choisie *</label>
                <select name="formation_id" required>
                    <option value="">-- Choisir une formation --</option>
                    <?php foreach ($formations as $f): ?>
                        <option value="<?= $f['id'] ?>"
                            <?= ($formation_id == $f['id']) ? 'selected' : '' ?>>
                            <?= htmlspecialchars($f['titre']) ?> – <?= $f['prix'] ?> DT
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div class="form-footer">
                <a href="index.php?page=formations" class="btn btn-outline">← Retour</a>
                <button type="submit" class="btn">Continuer →</button>
            </div>
        </form>

    </div>
</div>