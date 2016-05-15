<?php $this->layout('layout',['title' => 'Insertion Section']) ?>
<?php $this->start('main_content') ?>
<div class="container center">
  <h3 id="marge-titre" class="container grey lighten-4 z-depth-1 center-align shadow-effect teal-text text-lighten-2">Inserer un nouveau metier</h3>
  <div class="row">
    <div id="btn-form" class="z-depth-2 waves-effect waves-light btn-large">
      <a href="<?= $this->url('insertFormations') ?>">Formations</a>
    </div>
    <div id="btn-att" class="z-depth-2 waves-effect waves-light btn-large">
    <a href="<?= $this->url('insertAteliers') ?>">Ateliers</a>
    </div>
  </div>
</div>
<?php $this->stop('main_content') ?>
