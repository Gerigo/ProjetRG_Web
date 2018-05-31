<?php

class CommandeDB extends Commande {

    private $_db;
    private $_commande = array();

    public function __construct($cnx) {
        $this->_db = $cnx;
    }

    public function addCommande(array $data) {

        try {
            $query = "insert into commande (id_client,id_jeu,prix) values (:id_client,:id_jeu,:prix)";

            //var_dump($query);
            $resultset = $this->_db->prepare($query);
            $resultset->bindValue(':id_client', $data['id_client'], PDO::PARAM_STR);
            $resultset->bindValue(':id_jeu', $data['id_jeu'], PDO::PARAM_STR);
            $resultset->bindValue(':prix', $data['prix'], PDO::PARAM_STR);
            $resultset->execute();
            //$retour = $resultset->fetchColumn(0);
            //return $retour;
        } catch (PDOException $e) {
            print "<br/>Echec de l'insertion";
            print $e->getMessage();
        }
    }

    function getCommandeClient($id) {
        try {
            $query = "SELECT * FROM COMMANDE where ID_CLIENT=:id_client";
            $resultset = $this->_db->prepare($query);
            $resultset->bindValue(':id_client', $id);
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

    public function delCommande($id_client_,$id_jeu) {

        try {
            $query = "delete from commande where id_jeu = :id_jeu and id_client = :id_client";

            var_dump($query);
            $resultset = $this->_db->prepare($query);
            $resultset->bindValue(':id_jeu',$id);
            $resultset->bindValue(':id_client',$id_client);
            $resultset->execute();
            //$retour = $resultset->fetchColumn(0);
            //return $retour;
        } catch (PDOException $e) {
            print "<br/>Echec de la suppression";
            print $e->getMessage();
        }
    }

}
