<?php
require('../models/BDD.php');

use Model\BDD;

$id = $_GET['id'];
$bdd = BDD::instance();
$project = $bdd->recupProjectsByID($id);

// var_dump($project);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/detail-project.css">
</head>
<header>
    <?php require('navbar.php'); ?>
</header>

<body>
    <div class="project">
        <?php if ($project[0]['id'] <= 3): ?>
        <?php foreach ($project as $p): ?>
            <h1>
                <?= $p['project_name']; ?>
            </h1>
            <div class="infos">
                <div class="desc">
                    <?= $p['description']; ?>
                    Cliquez sur ce lien pour pouvoir visiter le site du projet.
                    <a href="projects/<?= $p['project_name']?>/<?= $p['project_name']?>.php"><?= $p['project_name']?></a>
                </div>
                <div class="img-project">
                    <img src="<?= $p['project_img']; ?>" alt="image du projet">
                </div>
            </div>
        <?php endforeach; ?>
        <?php else: ?>
            <?php foreach ($project as $p): ?>
            <h1>
                <?= $p['project_name']; ?>
            </h1>
            <div class="infos">
                <div class="desc">
                    <?= $p['description']; ?>
                    Cliquez sur ce lien pour pouvoir visiter le site du projet.
                    <a href="projects/<?= $p['project_name']?>/www/index.php"><?= $p['project_name']?></a>
                </div>
                <!-- <div class="img-project">
                    <img src="<?= $p['project_img']; ?>" alt="image du projet">
                </div> -->
            </div>
        <?php endforeach; ?>
        <?php endif?>
    </div>

</body>

</html>