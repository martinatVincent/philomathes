<?php

namespace Controller;

use \W\Controller\Controller;
use Model\MetiersModel;
use Model\AteliersModel;
use Model\FormationsModel;

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


  /////////////////////////////////////////////////////////////////////////////////////////////////////////////////
  

  public function ajaxateliers(){

    $metiersdb = new AteliersModel; //va chercher atelier
    $num = 6;
    $page = $_GET['page'];
    $start = ($page-1) * $num;
    $metiers = $metiersdb->findAll('section', "ASC", $num, $start);
    $this->showJson($metiers);
  }
  public function ajaxformations(){

    $metiersdb = new FormationsModel; //va chercher formation
    $num = 6;
    $page = $_GET['page'];
    $start = ($page-1) * $num;
    $metiers = $metiersdb->findAll('section', "ASC", $num, $start);
    $this->showJson($metiers);
  }

  /////////////////////////////////////////////////////////////////////////////////////////////////////////////////


  public function formationsEtAteliers(){
    $this->show('metiers/formationsEtAteliers');
  }



  public function formations(){

    $metiersdb = new FormationsModel;
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

    $this->show('metiers/formations', $params);
  }

  public function ateliers(){

    $metiersdb = new AteliersModel;
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

    $this->show('metiers/ateliers', $params);
  }

  

  public function profilformation($id){
    $profilFormation = new FormationsModel(); //aller chercher la formation par son id
    $params = [
      'formation' => $profilFormation->find($id),
    ];
    $this->show('metiers/profilformation', $params);
  }

  public function profilatelier($id){
    $profilAtelier = new AteliersModel(); //aller chercher la formation par son id
    $params = [
      'atelier' => $profilAtelier->find($id),
    ];
    $this->show('metiers/profilatelier', $params);
  }
}
