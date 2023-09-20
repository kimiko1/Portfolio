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

// Inclusion du traits permettant de scinder la classe BDD pour faciliter la maintenance 
require dirname(__FILE__)."/BDDConnexionTrait.php";
require dirname(__FILE__)."/BDDProjectTrait.php";
require dirname(__FILE__)."/BDDSkillTrait.php";
require dirname(__FILE__)."/BDDNavTrait.php";

/**
 * Cette classe sert d'interface d'encapsulation pour les accès à la base
 * de données SQLite. Toutes les requêtes sont ainsi centralisées.
 */
class BDD
{
    /**
     * Trait centralisant le code lié aux connexions
     */
    use BDDConnexionTrait;

    /**
     * Trait centralisant le code lié aux projets
     */
    use BDDProjectTrait;

    /**
     * Trait centralisant le code lié aux compétences
     */
    use BDDSkillTrait;

        /**
     * Trait centralisant le code lié a la nav-bar
     */
    use BDDNavTrait;

    /**
     * Singleton de la base de données.
     */
    private static $_instance;

    /**
     * Variable de classe indiquant le chemin d'accès vers le fichier de la base de données.
     */
    private static string $cheminDeLaBDD = '../data/database.db';

    /**
     * Variable de classe indiquant le chemin d'accès vers le fichier de la base de données côté admin.
     */
    private static string $cheminDeLaBDDAdmin = '../../data/database.db';

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
        if($_SERVER['REQUEST_URI'] == '/' || $_SERVER['REQUEST_URI'] == '/index.php' || $_SERVER['REQUEST_URI'] == '/login.php'|| $_SERVER['REQUEST_URI'] == '/project.php' || $_SERVER['REQUEST_URI'] == '/skill.php' || $_SERVER['REQUEST_URI'] == '/experience.php' || $_SERVER['REQUEST_URI'] == '/personalInformations.php' || $_SERVER['REQUEST_URI'] == '/controle_identification.php' || $_SERVER['REQUEST_URI'] == '/skill.php' || $_SERVER['REQUEST_URI'] == '/cv.php' || $_SERVER['REQUEST_URI'] == '/detail_project.php?id=1' || $_SERVER['REQUEST_URI'] == '/detail_project.php?id=2' || $_SERVER['REQUEST_URI'] == '/detail_project.php?id=3' || $_SERVER['REQUEST_URI'] == '/detail_project.php?id=4'){
            $this->bdd = new PDO('sqlite:' . BDD::$cheminDeLaBDD); 
        }
        else{
            $this->bdd = new PDO('sqlite:' . BDD::$cheminDeLaBDDAdmin);
        }
    }
}

?>