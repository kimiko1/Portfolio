<?php
/******************************************************************************
 *
 *                         C L A S S E    B D D
 *
 */

// La classe fait partie de l'espace de nommage Model du paradigme MVC
namespace Model;

// Inclusion des classes nécessaires
use PDO;

/**
 * Cette classe sert d'interface d'encapsulation pour les accès à la base
 * de données SQLite. Toutes les requêtes sont ainsi centralisées.
 */
class BDD{
    /**
     * Singleton de la base de données.
     */
    private static $_instance;

    /**
     * Variable de classe indiquant le chemin d'accès vers le fichier de la base de données.
     */
    private static string $cheminDeLaBDD = '../data/database.db';

    /**
     * Base de données SQLite3.
     */
    private $bdd;

    /**
     * Cette methode renvoie un objet unique de notre base de donnée.
     * C'est ce que l'on nomme communément un "Singleton".
     *
     * @return BDD
     */
    public static function instance()
    {
        if (is_null(self::$_instance)) {
            self::$_instance = new BDD();
        }

        return self::$_instance;
    }

    public function __construct()
    {
        $this->bdd = new PDO('sqlite:'.BDD::$cheminDeLaBDD);
    }

    public function recupInfo()
    {
        // Construction de la requête SQL
        $requete = "SELECT * FROM infos_persos";
        // Envoi de la requête SQL
        $resultats = $this->bdd->query($requete);
        // Création d'un tableau vide
        $infos = array();
        // La requête a renvoyé des éléments ?
        if ($resultats) {
            // Récupération des lignes de la table
            while ($res = $resultats->fetchAll(PDO::FETCH_ASSOC)) {
                // Chaque enregistrement vient enrichir le tableau.
                $infos[] = $res;
            }
        }
        return $infos;
    }
}
?>