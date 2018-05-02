<?php

class ClientDB extends Client {

    private $_db;
    private $_client = array();

    public function __construct($cnx) {
        $this->_db = $cnx;
    }

    public function addClient(array $data) {

        $query = "insert into client (nom,prenom,mdp,adresse,ville,tel,mail) values (:nom,:prenom,:mdp,:adresse,:ville,:tel,:mail)";

        try {
            $resultset = $this->_db->prepare($query);
            $resultset->bindValue(':nom', $data['nom'], PDO::PARAM_STR);
            $resultset->bindValue(':prenom', $data['prenom'], PDO::PARAM_STR);
            $resultset->bindValue(':mdp', $data['mdp'], PDO::PARAM_STR);
            $resultset->bindValue(':adresse', $data['adresse'], PDO::PARAM_STR);
            $resultset->bindValue(':ville', $data['ville'], PDO::PARAM_STR);
            $resultset->bindValue(':tel', $data['tel'], PDO::PARAM_STR);
            $resultset->bindValue(':mail', $data['mail'], PDO::PARAM_STR);
            $resultset->execute();
            //$retour = $resultset->fetchColumn(0);
            //return $retour;
        } catch (PDOException $e) {
            print "Données non encodées";
            print $e->getMessage();
        }
    }
    
    function isClient($mail, $mdp) {
        try {
            $query = "select * from client where mail = :mail and mdp = :mdp";
            $resultset = $this->_db->prepare($query);
            $resultset->bindValue(':mail', $mail);
            $resultset->bindValue(':mdp', $mdp);
            $resultset->execute();
            $data = $resultset->fetch();
            if (!empty($data)) {
                try {
                    $_client[] = new Client($data);
                    if ($_client[0]->mail == $mail && $_client[0]->mdp ==$mdp ) {
                        return $_client;
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
    
    function getClient($id_client) {
        try {
            $query = "select * from client where id_client = :id_client";
            $resultset = $this->_db->prepare($query);
            $resultset->bindValue(':id_client', $id_client);
            $resultset->execute();
            $data = $resultset->fetchAll();
//var_dump($data);
            $resultset->execute();
        } catch (PDOException $e) {
            print $e->getMessage();
        }

        while ($data = $resultset->fetch()) {
            try {
                $_infoArray[] = $data;
            } catch (PDOException $e) {
                print $e->getMessage();
            }
        }
        return $_infoArray;
    }

}
