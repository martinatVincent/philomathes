<?php

namespace Model;

class ActuModel extends \W\Model\UsersModel {

  public function findActu($section, $orderBy = "", $limit = null, $offset = null)
  {

  	$sql = "SELECT * FROM actus WHERE alias = :alias";
  	$sth = $this->dbh->prepare($sql);
    $sth->bindValue(':alias', $section);
  	$sth->execute();
  	$act = $sth->fetchAll();
    $idactu = $act[0]['id'];
    $sql2 = 'SELECT * FROM users WHERE id_actu = :id_actu';
    if (!empty($orderBy)){

        if(!preg_match("#^[a-zA-Z0-9_$]+$#", $orderBy)){
            die("invalid orderBy param");
        }
        if ($limit && !is_int($limit)){
            die("invalid limit param");
        }
        if ($offset && !is_int($offset)){
            die("invalid offset param");
        }

        $sql2 .= " ORDER BY $orderBy";

        if ($limit){
            $sql2.= " LIMIT $limit";
            if ($offset){
                $sql2 .= " OFFSET $offset";
            }
        }
    }
    $sth = $this->dbh->prepare($sql2);
    $sth->bindValue(':id_actu', $idactu);
  	$sth->execute();
  	return $sth->fetchAll();

  }
  public function findSection($section){

    $sql = "SELECT section FROM actus WHERE alias = '$section' ";
  	$sth = $this->dbh->prepare($sql);
  	$sth->execute();
  	return $sth->fetchAll();
  }
  public function findAll(){

    $sql = "SELECT * FROM actus";
  	$sth = $this->dbh->prepare($sql);
  	$sth->execute();
  	return $sth->fetchAll();
  }
}
