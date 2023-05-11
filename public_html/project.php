<?php
// Inclusion des models
require('../models/User.php');
require('../models/BDD.php');

use Model\BDD;

$bdd = BDD::instance();
$project = $bdd->recupProject();
?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projets</title>
    <link rel="stylesheet" href="css/project.css">
</head>
<header>
    <?php require('navbar.php'); ?>
</header>

<body>
    <div class="cards">
        <?php foreach ($project as $p): ?>
            <div class="card">
                <div class="img">
                    <img src="<?php echo $p['image_projet']?>" alt="">
                </div>
                <div class="infos">
                    <h1>
                        <?php echo $p['nom_projet'] ?>
                    </h1>
                    <p>
                        <?php echo $p['bref_desc'] ?>
                    </p>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</body>
<footer>

</footer>

</html>