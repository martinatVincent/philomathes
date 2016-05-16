<?php $this->layout('layout', ['title' => 'Article Selectionner']) ?>

<?php $this->start('main_content') ?>

<section id="description" class="container section">

<div class="row">
  <div id="slideprojet" class="col s12 m12 l12 slider">
    <div class="center">
          <img src="<?= $this->assetUrl($actus['photo'])?>" alt="essai">
          <div class="caption center-align">
            <h3><?= $actus['date']?></h3>
            </div>
  </div>
  </section>
<section id="description" class="container section">
    <div id="titleprojet" class="col s12 m12 l4">
      <h4><?= $actus['titre'] ?></h4>
      <p><?= $actus['description']?></p>
    </div>
</div>
</div>

</section>
<?php $this->stop('main_content') ?>
