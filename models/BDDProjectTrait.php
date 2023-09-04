<?php

namespace Model;

use PDO;

trait BDDProjectTrait
{
public function recupInfoPerso()
    {
        // Construction de la requête SQL
        $requete = "SELECT * FROM infos_perso";
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

    public function recupProjects()
    {
        // Construction de la requête SQL
        $requete = "SELECT * FROM projets;";
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

    public function recupProjectsByID($id)
    {
        // Construction de la requête SQL
        $requete = "SELECT * FROM projets WHERE id='$id';";
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