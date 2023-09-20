<?php

namespace Model;

use PDO;

trait BDDNavTrait
{
public function recupLinks()
    {
        // Construction de la requête SQL
        $requete = "SELECT * FROM navbar";
        // Envoi de la requête SQL
        $resultats = $this->bdd->query($requete);
        // Création d'un tableau vide
        $infos = [];
        // La requête a renvoyé des éléments ?
        if ($resultats) {
            // Récupération des lignes de la table
            while ($res = $resultats->fetchAll(PDO::FETCH_ASSOC)) {
                // Chaque enregistrement vient enrichir le tableau.
                $infos = $res;
            }
        }
        return $infos;
    }

    public function recupLink()
    {
        // Construction de la requête SQL
        $requete = "SELECT * FROM navbar;";
        // Envoi de la requête SQL
        $resultats = $this->bdd->query($requete);
        // Création d'un tableau vide
        $infos = [];
        // La requête a renvoyé des éléments ?
        if ($resultats) {
            // Récupération des lignes de la table
            while ($res = $resultats->fetchAll(PDO::FETCH_ASSOC)) {
                // Chaque enregistrement vient enrichir le tableau.
                $infos = $res;
            }
        }
        return $infos;
    }
}
?>