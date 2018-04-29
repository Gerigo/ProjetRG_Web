<?php

class AdminDB extends Admin {

    private $_db;
    private $_admin = array();

    public function __construct($db) {
        $this->_db = $db;
    }

    function isAdmin($login, $mdp) {
        try {
            $query = "select * from admin where aname = :aname and mdp = :mdp";
            $resultset = $this->_db->prepare($query);
            $resultset->bindValue(':aname', $login);
            $resultset->bindValue(':mdp', $mdp);
            $resultset->execute();
            $data = $resultset->fetch();
            if (!empty($data)) {
                try {
                    $_admin[] = new Admin($data);
                    if ($_admin[0]->aname == "$aname" && $_admin[0]->mdp == $mdp) {
                        return $_admin;
                    } else {
                        return null;
                    }
                } catch (PDOException $e) {
                    print $e->getMessage();
                }
            }
        } catch (PDOException $e) {
            print "Echec de la connexion" . $e->getMessage();
        }
    }
}