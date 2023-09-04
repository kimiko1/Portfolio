<?php
// Inclusion des models
require('../models/User.php');
require('../models/BDD.php');

use Model\BDD;

$bdd = BDD::instance();
$competence = $bdd->recupSkills();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/skill.css">
    <title>Compétence</title>
</head>

<body>
    <header>
        <?php require('navbar.php'); ?>
    </header>
    <div class="container">

        <h1 class='title'>Mes Compétences</h1>
        <div class="competence">
            <table>
                <tr>
                    <?php foreach($competence as $comp):?>
                    <th><?= $comp['name'];?></th>
                    <?php endforeach;?>
                </tr>
                <tr>
                    <?php foreach($competence as $comp):?>
                    <td><img src="<?= $comp['img'];?>" alt="" srcset=""></td>
                    <?php endforeach;?>
                </tr>
            </table>
        </div>
    </div>
</body>

</html>