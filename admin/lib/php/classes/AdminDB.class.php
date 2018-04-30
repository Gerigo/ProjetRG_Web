<?php

class AdminDB extends Admin {

    private $_db;
    private $_array = array();

    public function __construct($db) {
        $this->_db = $db;
    }

    public function getAdmin($admin, $password) {

        // print "test"; 
        //print $admin." ".$password." "; 

        try {
            $query = "select * from admin where admin = :admin and password=:password";
            $resultset = $this->_db->prepare($query);
           // $password = password_hash($password, $algo);
            $resultset->bindValue(':admin', $admin);
            $resultset->bindValue(':password', $password);
            $resultset->execute();
         //   var_dump($resultset);
            while ($data = $resultset->fetch()) {
                $_array[] = new Admin($data);
                //  var_dump($_array);
            }
        } catch (PDOException $e) {
            print $e->getMessage();
        }
        if (!empty($_array)) {
            return $_array;
        } else {
            return null;
        }
    }

}
