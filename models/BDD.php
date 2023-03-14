<?php
namespace Model;
use SQLite3;
class BDD{
    private static string $cheminDeLaBDD = '../data/data.db';

    static public function affiche()
    {
        $conn = new SQLite3(BDD::$cheminDeLaBDD);
        $req = $conn->query("SELECT * from identification");
        $user = array();
        $results = $req;
        if ($results) {
            while ($row = $results->fetchArray()) {
                array_push($user, new User($row[0], $row[1], $row[2], $row[3], $row[4], $row[5]));
            }
        }
        return $user;
    }
}
?>