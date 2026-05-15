<div class="cours-header">
    <h2>Espace Cours</h2>
    <p>Bienvenue <?= htmlspecialchars($inscription['prenom'] . ' ' . $inscription['nom']) ?> — <?= htmlspecialchars($inscription['formation_titre']) ?></p>
</div>

<div class="cours-grid">
    <div class="cours-item">
        <div class="module-icon">📄</div>
        <div>
            <div>Module 1 — Introduction</div>
            <div class="module-label">Leçon · 45 min</div>
        </div>
    </div>
    <div class="cours-item">
        <div class="module-icon">📘</div>
        <div>
            <div>Module 2 — Concepts fondamentaux</div>
            <div class="module-label">Leçon · 1h 20min</div>
        </div>
    </div>
    <div class="cours-item">
        <div class="module-icon">🛠️</div>
        <div>
            <div>Module 3 — Travaux pratiques</div>
            <div class="module-label">Pratique · 2h</div>
        </div>
    </div>
    <div class="cours-item">
        <div class="module-icon">🎯</div>
        <div>
            <div>Module 4 — Projet final</div>
            <div class="module-label">Projet · 3h</div>
        </div>
    </div>
</div>