<?php
    require('../models/BDD.php');

    use Model\BDD;
    
    $bdd = BDD::instance();
    $projects = $bdd->recupProjects();
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
        <?php foreach($projects as $project):?>
        <div class="card">
            <div class="img">
                <img src="<?php echo $project['project_img']?>" alt="">
            </div>
            <div class="infos">
                <h1><?= $project['project_name']?></h1>
                <p><?= $project['short description']?></p>
                <button onclick="window.location.href= 'detail_project.php?id=<?php echo $project['id']?>'" class="savoir_plus">En savoir plus</button>
            </div>
        </div>
        <?php endforeach?>
    </div>
</body>
<footer>

</footer>

</html>