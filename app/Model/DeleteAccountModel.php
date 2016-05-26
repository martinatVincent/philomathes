<?php

namespace Model;

class DeleteAccountModel extends \W\Model\UsersModel {


    public function deleteProjetsByUser($id){
		$sql = "DELETE FROM projets WHERE id_user = :id_user";
    $sth = $this->dbh->prepare($sql);
		$sth->bindValue(":id_user", $id);
		if($sth->execute()){
      return true;
      }
    	else {
    		return false;
    	}
    }

    public function deleteUserById($id){
    $sql = "DELETE FROM users WHERE id = :id";
    $sth = $this->dbh->prepare($sql);
    $sth->bindValue(":id", $id);
    if($sth->execute()){
      return true;
      }
      else {
        return false;
      }
    }
   // $sql = "DELETE FROM users, projets, photos WHERE EXISTS (SELECT * FROM users, projets, photos WHERE users.id = :id AND projets.id_user = :id AND projets.id = photos.id_projet)";


    public function findIdByMail($mail){
      $sql = 'SELECT id FROM users WHERE email = :email';
      $sth = $this->dbh->prepare($sql);
      $sth->bindValue(':email', $mail);
      $sth->execute();

      return $sth->fetch();
    }

}
