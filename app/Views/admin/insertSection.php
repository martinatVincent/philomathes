<?php $this->layout('layout',['title' => 'Insertion Section']) ?>
<?php $this->start('main_content') ?>
<div class="container center">
  <h3 id="marge-titre" class="container grey lighten-4 z-depth-1 center-align shadow-effect teal-text text-lighten-2">Inserer un nouveau metier</h3>
  <div class="row">
    <div class="bouttonFormations">
      <a href="<?= $this->url('insertFormations') ?>">Formations</a>
    </div>
    <div class="bouttonAteliers">
    <a href="<?= $this->url('insertAteliers') ?>">Ateliers</a>
    </div>
  </div>
</div>
<?php $this->stop('main_content') ?>
