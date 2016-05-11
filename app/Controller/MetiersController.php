<?php

namespace Controller;

use \W\Controller\Controller;
use Model\MetiersModel;

class MetiersController extends Controller
{
    public function metiers(){

      $metiersdb = new MetiersModel;
      $num = 6;
      $page = 1;
      $start = ($page-1) * $num;
      $params['page']  = $page;
      $metiers = $metiersdb->findAll('section', "ASC", $num, $start);
      $params['metiers'] = $metiers;
      $allmetiers = $metiersdb->findAll('section', "ASC");
      $countmetiers = count($allmetiers) + 1 ;
      $totalpages = ceil($countmetiers/$num);
      $params['totalpages'] = $totalpages;

      $this->show('metiers/metiers', $params);
	}

    public function ajaxmetiers(){

      $metiersdb = new MetiersModel;
      $num = 6;
      $page = $_GET['page'];
      $start = ($page-1) * $num;
      $metiers = $metiersdb->findAll('section', "ASC", $num, $start);
      $this->showJson($metiers);
    }
}
