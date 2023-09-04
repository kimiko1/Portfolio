<?php

namespace Model;

use PDO;

trait BDDSkillTrait
{
    public function recupSkills()
    {
        // Construction de la requête SQL
        $requete = "SELECT * FROM skills;";
        // Envoi de la requête SQL
        $resultats = $this->bdd->query($requete);
        // Création d'un tableau vide
        $skills = [];
        // La requête a renvoyé des éléments ?
        if ($resultats) {
            // Récupération des lignes de la table
            while ($res = $resultats->fetchAll(PDO::FETCH_ASSOC)) {
                // Chaque enregistrement vient enrichir le tableau.
                $skills = $res;
            }
        }
        return $skills;
    }

    public function recupSkillByID($id)
    {
        // Construction de la requête SQL
        $requete = "SELECT * FROM skills WHERE id='$id';";
        // Envoi de la requête SQL
        $resultats = $this->bdd->query($requete);
        // Création d'un tableau vide
        $skill = [];
        // La requête a renvoyé des éléments ?
        if ($resultats) {
            // Récupération des lignes de la table
            while ($res = $resultats->fetchAll(PDO::FETCH_ASSOC)) {
                // Chaque enregistrement vient enrichir le tableau.
                $skill = $res;
            }
        }
        return $skill;
    }

    public function addSkill($name, $img)
    {
        // Construction de la requête SQL
        $requete = "INSERT INTO skills name=? img=?;";
        // Envoi de la requête SQL
        $resultats = $this->bdd->query($requete);
    }
}
?>