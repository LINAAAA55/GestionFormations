<h1 class="page-title">Nos Formations</h1>
<p class="page-subtitle">Découvrez nos programmes disponibles et choisissez celui qui vous correspond.</p>

<?php
// Map formation images by keyword in title
function getFormationImage(string $titre): string {
    $t = strtolower($titre);

    // Specific certifications
    if (str_contains($t, 'crtp'))
        return 'assets/images/crtp3.webp';

    if (str_contains($t, 'cpts'))
        return 'assets/images/cpts.webp';

    if (str_contains($t, 'oscp'))
        return 'https://images.credly.com/size/340x340/images/ec81134d-e80b-4eb5-ae07-0eb8e1a60fcd/image.png';

    // Generic by topic
    if (str_contains($t, 'web') || str_contains($t, 'développement'))
        return 'https://images.unsplash.com/photo-1461749280684-dccba630e2f6?w=400&h=180&fit=crop';

    if (str_contains($t, 'data') || str_contains($t, 'python'))
        return 'https://images.unsplash.com/photo-1504868584819-f8e8b4b6d7e3?w=400&h=180&fit=crop';

    if (str_contains($t, 'cyber') || str_contains($t, 'sécurité') || str_contains($t, 'hacking'))
        return 'https://images.unsplash.com/photo-1550751827-4bd374c3f58b?w=400&h=180&fit=crop';

    if (str_contains($t, 'design') || str_contains($t, 'ui') || str_contains($t, 'ux'))
        return 'https://images.unsplash.com/photo-1611532736597-de2d4265fba3?w=400&h=180&fit=crop';

    if (str_contains($t, 'mobile') || str_contains($t, 'android') || str_contains($t, 'ios'))
        return 'https://images.unsplash.com/photo-1512941937669-90a1b58e7e9c?w=400&h=180&fit=crop';

    if (str_contains($t, 'cloud') || str_contains($t, 'devops'))
        return 'https://images.unsplash.com/photo-1451187580459-43490279c0fa?w=400&h=180&fit=crop';

    return 'https://images.unsplash.com/photo-1434030216411-0b793f4b4173?w=400&h=180&fit=crop';
}
?>

<?php if (empty($formations)): ?>
    <p>Aucune formation disponible pour le moment.</p>
<?php else: ?>
    <div class="formations-grid">
        <?php foreach ($formations as $f): ?>
            <div class="card">
                <img src="<?= getFormationImage($f['titre']) ?>"
     alt="<?= htmlspecialchars($f['titre']) ?>"
     class="<?= (str_contains(strtolower($f['titre']), 'crtp') || str_contains(strtolower($f['titre']), 'cpts') || str_contains(strtolower($f['titre']), 'oscp')) ? 'card-img-contain' : 'card-img' ?>">
                <span class="card-category">Formation</span>
                <h3><?= htmlspecialchars($f['titre']) ?></h3>
                <p class="desc"><?= htmlspecialchars($f['description']) ?></p>
                <ul class="card-meta">
                    <li>⏱ <?= htmlspecialchars($f['duree']) ?></li>
                    <li>📊 <?= htmlspecialchars($f['niveau']) ?></li>
                </ul>
                <div class="card-footer">
                    <span class="price"><?= number_format($f['prix'], 2, ',', ' ') ?> <small>DT</small></span>
                    <a href="index.php?page=inscription&formation_id=<?= $f['id'] ?>" class="btn btn-sm">S'inscrire →</a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
<?php endif; ?>