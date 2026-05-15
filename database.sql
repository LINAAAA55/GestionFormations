CREATE DATABASE IF NOT EXISTS gestion_formations CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE gestion_formations;

CREATE TABLE formations (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titre VARCHAR(150) NOT NULL,
    description TEXT,
    duree VARCHAR(50),
    prix DECIMAL(10,2),
    places INT DEFAULT 20,
    date_debut DATE
);

CREATE TABLE inscriptions (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(100) NOT NULL,
    prenom VARCHAR(100) NOT NULL,
    email VARCHAR(150) NOT NULL,
    formation_id INT NOT NULL,
    statut_paiement ENUM('en_attente','paye','annule') DEFAULT 'en_attente',
    date_inscription DATETIME DEFAULT NOW(),
    FOREIGN KEY (formation_id) REFERENCES formations(id)
);

INSERT INTO formations (titre, description, duree, prix, places, date_debut) VALUES
('HTML, CSS & JavaScript', 'Les bases du développement web.', '6 semaines', 290.00, 18, '2025-06-02'),
('PHP & MySQL', 'Applications web dynamiques avec PHP et MySQL.', '8 semaines', 390.00, 20, '2025-06-09'),
('Python Data Science', 'Analyse de données avec Pandas et NumPy.', '10 semaines', 490.00, 15, '2025-06-16'),
('Figma & UI/UX Design', 'Conception d''interfaces modernes avec Figma.', '4 semaines', 350.00, 15, '2025-07-01'),
('Gestion de Projet Agile', 'Méthodes agiles et certification Scrum Master.', '3 semaines', 420.00, 25, '2025-07-07');