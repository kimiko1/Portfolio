<?php
namespace Model;
use SQLite3;
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
        $this->bdd = new SQLite3(BDD::$cheminDeLaBDD);
    }
    public function recupInfo()
    {
        $bdd = new SQLite3(BDD::$cheminDeLaBDD);
        $req = $bdd->query("SELECT * FROM infos_persos");
        $infos = array();
        // La requête a renvoyé des éléments ?
        if ($req) {
            // Récupération des lignes de la table
            while ($res = $req->fetchArray(1)) {
                // Chaque enregistrement vient enrichir le tableau.
                $infos[] = $res;
            }
        }
        return $infos;
    }
}
?>