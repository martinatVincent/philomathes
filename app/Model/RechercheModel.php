<?php

namespace Model;

class RechercheModel extends \W\Model\UsersModel {


    public function rechercheUsers($search){

		$sql = ("SELECT * FROM users WHERE nom  LIKE :search OR prenom LIKE :search OR description LIKE :search COLLATE utf8_bin");
        $sth = $this->dbh->prepare($sql);
		$sth->bindValue(":search", '%'.$search.'%');
		if($sth->execute()){
			return $sth->fetchAll();
    	}
    	else {
    		return false;

    	}
    }
    public function rechercheFormations($search){

		$sql = ("SELECT * FROM formations WHERE section  LIKE :search OR description LIKE :search COLLATE utf8_bin");
        $sth = $this->dbh->prepare($sql);
		$sth->bindValue(":search", '%'.$search.'%');
		if($sth->execute()){
			return $sth->fetchAll();
    	}
    	else {
    		return false;

    	}
    }
}
