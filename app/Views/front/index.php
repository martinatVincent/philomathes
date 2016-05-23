<?php $this->layout('layout', ['title' => 'Accueil']) ?>

<?php $this->start('main_content') ?>


<div class="container">
	<div class="slider louil z-depth-1 shadow-effect">
	    <ul class="slides louil" >
		<?php foreach ($actus as $act) : ?>
<li class="row">
  <img class="col l5" src='<?= $this->assetUrl('/img/'.$act['photo']);?>'>
  <div class="grey lighten-4 z-depth-1 col l7 slida valign-wrapper">
  <div class="valign">
    <h3 class="teal-text text-lighten-2"><?= ucfirst($act['titre']);?></h3>
    <?php if (strlen($act['description']) > 50): ?>

      <h5 class="light teal-text text-lighten-2"><?=chunk_split($act['description']);?></h5>

      <?php else: ?>
        <h5 class="light black-text text-lighten-3"><?= $act['description'];?></h5>
    <?php endif; ?>
  </div>
</div>
</li>

<?php endforeach; ?>
</ul>
</div>
</div>


<div id="titre-index" class="row section center container">
  <h3 id="marge-titre" class="container grey lighten-4 z-depth-1 center-align shadow-effect teal-text text-lighten-2">Qui sommes nous?</h3>
  <p class="grey lighten-4 z-depth-1 center-align teal-text text-lighten-2">
    Nous sommes un Organisme de formation et d’actions culturelles a Bordeaux. Une association pour la promotion, la valorisation et la diffusion des sciences, lettres, arts et techniques a Bordeaux et en Aquitaine. Ses principaux moyens d’action sont la formation permanente, et les conférences, débats, rencontres et expositions.
  </p>
  <a class="btn btn-5 shadow-effect" id="index-contact" href="<?= $this->url('contactAdmin') ?>">Nous contacter<a/>
    <h5 class="ad-philo"><br>cliquez sur le bouton ci dessus<br><br>ou a l'Adresse suivante : 66 Rue Abbé de l'Épée,<br> 33000 Bordeaux</h5>
  </div>
  <h3 id="marge-titre" class="container grey lighten-4 z-depth-1 center-align shadow-effect teal-text text-lighten-2">Les métiers proposés</h3>
  <div class="container">
    <ul class="pagination center">
      <?php for($i=1; $i<=$totalpages; $i++):?>
        <li class="waves-effect">
          <a class="paginations paginmet white-text" href="<?= $i?>"><?= $i?></a>
        </li>
      <?php endfor;?>
    </ul>
  </div>

  <section id="allworks" class="row section container">
    <?php foreach ($metiers as $met):?>
      <article class="col s12 m6 l4">
        <div class="grey lighten-4 z-depth-1">
          <div class=" contain-img">
            <img class="hov-zoom" src="<?= $met['photo']?>" alt="">
            <div class="text-box">
              <h2 class="lighten-4">Voir les profils</h2>
              <a class="link-metier" href="metiers/<?= $met['alias']?>/profilsall"></a>
            </div>
          </div>
          <div class="text-works center">
            <h6><?= $met['section']?></h6>
            <p class=""><?= mb_substr($met['description'], 0 , 400 ).'...'?></p>
          </div>
        </div>
      </article>
    <?php endforeach;?>
  </section>
  <?php $this->stop('main_content') ?>

  <?php $this->start('script') ?>
  <script type="text/javascript">
  $('#mySwitch').prop('checked')
  var pageUrl = '<?= $this->url('paginationsmetiers') ?>';
  </script>
  <?php $this->stop('script') ?>
