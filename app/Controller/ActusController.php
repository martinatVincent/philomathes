<?php

namespace Controller;

use \W\Controller\Controller;
use Model\ActuModel;

class ActusController extends Controller
{
    public function actus(){

      $actusdb = new ActuModel;
      $num = 6;
      $page = 1;
      $start = ($page-1) * $num;
      $params['page']  = $page;
      $actus = $actusdb->findAll('section', "ASC", $num, $start);
      $params['actus'] = $actus;
      $allactus = $actusdb->findAll('section', "ASC");
      $countactus = count($allactus) + 1 ;
      $totalpages = ceil($countactus/$num);
      $params['totalpages'] = $totalpages;

      $this->show('actus/actus', $params);
	}

    public function ajaxactus(){

      $actusdb = new ActuModel;
      $num = 6;
      $page = $_GET['page'];
      $start = ($page-1) * $num;
      $actus = $actusdb->findAll('section', "ASC", $num, $start);
      $this->showJson($actus);
    }
}
