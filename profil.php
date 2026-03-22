<?php
$nom = "Aouaj";
$prenom = "Safa";
$email = "Safa.Aouaj@edu.isetcom.tn";
$age = 20;
$ville="Ariana";
$formation="Gtic"
?>
<!DOCTYPE html>
<html>
<head>
<title>Profil utilisateur</title>
</head>
<body>
<h1>Profil utilisateur</h1>
<p><strong>Nom :</strong> <?php echo $nom; ?></p>
<p><strong>Prénom :</strong> <?php echo $prenom; ?></p>
<p><strong>Email :</strong> <?php echo $email; ?></p>
<p><strong>Âge :</strong> <?php echo $age; ?> ans</p>
<p>Bienvenue <?php echo $prenom; ?> dans la formation <?php echo $formation; ?></p>

</body>
</html>