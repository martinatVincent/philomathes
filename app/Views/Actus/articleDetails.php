<?php $this->layout('layout', ['title' => 'Article Selectionner']) ?>

<?php $this->start('main_content') ?>

<section id="description" class="container section">

<div class="row">
  <div  class="col s12 m12 l12 ">
  <h4 class="titreArticle"><?= $actus['titre'] ?></h4>
    <div class="center">
          <img class="imageArticle" src="<?= $this->assetUrl('img/'.$actus['photo'])?>" alt="image actualité">
          <div class="caption center-align">
            <p><?= $actus['date']?></p>
            </div>
  </div>
  </section>
<section id="description" class="container section">
    <div class="col s12 m12 l4 grey lighten-4 z-depth-1 center-align descriptionArticle">
      
      <p><?= $actus['description']?></p>
    </div>
</div>
</div>

</section>
<?php $this->stop('main_content') ?>
