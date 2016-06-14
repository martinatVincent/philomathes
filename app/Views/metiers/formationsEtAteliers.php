<?php $this->layout('layout', ['title' => 'Metiers']) ?>

<?php $this->start('main_content') ?>

<h3 id="marge-titre" class="container grey lighten-4 z-depth-1 center-align shadow-effect teal-text text-lighten-2">Nos formations et ateliers</h3>


<section id="allworks" class="row section container boutton_formations_ateliers">

  
  	<div class="col s12 m12 l6 formationButton contain-img">
      <img class="hov-zoom" src="<?= $this->assetUrl('img/formations.jpg') ?>" alt="">
      <div class="text-box">
        <a href="<?= $this->url('formations') ?>"><h2 class="lighten-4">Formations</h2></a>
        
      </div>
    </div>

 	<div class="col s12 m12 l6 atelierButton contain-img">
      <img class="hov-zoom" src="<?= $this->assetUrl('img/ateliers.jpg') ?>" alt="">
      <div class="text-box">
        <a href="<?= $this->url('ateliers') ?>"><h2 class="lighten-4">Ateliers loisir</h2></a>
      </div>
    </div>
 
    
  
</section>
<?php $this->stop('main_content') ?>
