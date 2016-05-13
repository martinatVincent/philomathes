<?php

namespace Model;

class ActusModel extends \W\Model\Model {

  public function findActu($actu, $orderBy = "", $limit = null, $offset = null)
  {

  	$sql = "SELECT * FROM actus WHERE alias = :alias";
  	$sth = $this->dbh->prepare($sql);
    $sth->bindValue(':alias', $actu);
  	$sth->execute();
  	$act = $sth->fetchAll();
    $idactu = $act[0]['id'];
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

    }
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
