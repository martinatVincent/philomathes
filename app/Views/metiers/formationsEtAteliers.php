<?php $this->layout('layout', ['title' => 'Metiers']) ?>

<?php $this->start('main_content') ?>

<h3 id="marge-titre" class="container grey lighten-4 z-depth-1 center-align shadow-effect teal-text text-lighten-2">Nos formations et ateliers</h3>


<section id="allworks" class="row section container boutton_formations_ateliers">

  <div id="boutton-formations">
    <a href="<?= $this->url('formations') ?>">formations</a>
  </div>
  <div id="boutton-ateliers">
    <a href="<?= $this->url('ateliers') ?>">ateliers loisir</a>
  </div>
</section>
<?php $this->stop('main_content') ?>
