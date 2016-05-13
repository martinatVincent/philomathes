<?php

namespace Controller;

use \W\Controller\Controller;
use Model\ActusModel;

class ActusController extends Controller
{
    public function actus(){

      $actusdb = new ActusModel;
      $num = 6;
      $page = 1;
      $start = ($page-1) * $num;
      $params['page']  = $page;
      $actus = $actusdb->findAll('date', "ASC", $num, $start);
      $params['actus'] = $actus;
      $allactus = $actusdb->findAll('date', "ASC");
      $countactus = count($allactus) + 1 ;
      $totalpages = ceil($countactus/$num);
      $params['totalpages'] = $totalpages;

      $this->show('actus/actus', $params);
	}

    public function ajaxactus(){

      $actusdb = new ActusModel;
      $num = 6;
      $page = $_GET['page'];
      $start = ($page-1) * $num;
      $actus = $actusdb->findAll('date', "ASC", $num, $start);
      $this->showJson($actus);
    }
}
