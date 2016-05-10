<?php

namespace Model;

class ProjetModel extends \W\Model\UsersModel {

    public function getProjectPhotos($id){

        $sql = "SELECT * FROM photos WHERE id_projet = :id";
        $sth = $this->dbh->prepare($sql);
        $sth->bindValue(":id", $id);
        $sth->execute();

        return $sth->fetchAll();

    }

}
