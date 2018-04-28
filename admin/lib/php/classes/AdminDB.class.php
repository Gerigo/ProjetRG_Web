<?php

class AdminDB extends Admin {

    private $_db;
    private $_admin = array();

    public function __construct($db) {
        $this->_db = $db;
    }

    function isAdmin($login, $mdp) {
        try {
            $query = "select * from Admin_pension where admin =:admin and password=:password";
            $resultset = $this->_db->prepare($query);
            $resultset->bindValue('admin', $admin);
            $resultset->bindValue('password', $password);
            $resultset->execute();
            $data = $resultset->fetch();
            if (!empty($data)) {
                try {
                    $_admin[] = new Admin($data);
                    if ($_admin[0]->admin == "$admin" && $_admin[0]->password == $password) {
                        return $_admin;
                    } else {
                        return null;
                    }
                } catch (PDOException $e) {
                    print $e->getMessage();
                }
            }
        } catch (PDOException $e) {
            print "Requete échouée" . $e->getMessage();
        }
    }

}
