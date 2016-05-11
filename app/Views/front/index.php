<?php $this->layout('layout', ['title' => 'Accueil']) ?>

<?php $this->start('main_content') ?>


<div class="slider z-depth-1">
    <ul class="slides">
      <li>
        <img src="http://static.panoramio.com/photos/original/12271445.jpg"> <!-- random image -->
        <div class="caption center-align">
          <h3 class="teal lighten-2">PHILOMATHIQUE de bordeaux</h3>
          <h5 class="light grey-text text-lighten-3">établissement de formation</h5>
        </div>
      </li>
      <li>
        <img src="http://www.bordeaux-gazette.com/IMG/jpg/samedi_28_02_15_8_copie.jpg"> <!-- random image -->
        <div class="caption left-align">
          <h3 class="teal lighten-2">PHILOMATHIQUE de bordeaux</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
      <li>
        <img src="http://www.hyperbolyk-blog.com/wp-content/uploads/2014/10/formation.png"> <!-- random image -->
        <div class="caption right-align">
          <h3 class="teal lighten-2">PHILOMATHIQUE de bordeaux</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
      <li>
        <img src="http://www.mairie-deuillabarre.fr/images/5-PRATIQUE/5.8-EMPLOIS-FORMATIONS-ENTREPRENDRE/Formation.jpg"> <!-- random image -->
        <div class="caption center-align">
          <h3 class="teal lighten-2">PHILOMATHIQUE de bordeaux</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
    </ul>
  </div>
<div id="titre-index" class="row section center container">
	<p class="grey lighten-4 z-depth-1 center-align teal-text text-lighten-2">
		Organisme de formation et d’actions culturelles Bordeaux. Association pour la promotion, la valorisation et la diffusion des sciences, lettres, arts et techniques Bordeaux et en Aquitaine. Ses principaux moyens d’action sont la formation permanente, et les conférences, débats, rencontres et expositions.
	</p>
	<h3 id="marge-titre" class="container grey lighten-4 z-depth-1 center-align shadow-effect teal-text text-lighten-2">Agenda de la philomathique</h3>

</div>
<h3 id="marge-titre" class="container grey lighten-4 z-depth-1 center-align shadow-effect teal-text text-lighten-2">Nos sociétaire</h3>
<div class="container">
	<div class="slider louil z-depth-1 shadow-effect" style="margin-bottom:5%;">
	    <ul class="slides louil" >
				<?php foreach ($users as $use): ?>
					<li class="row">
						<img class="col l5" src='<?= $this->assetUrl($use['photo']);?>'>
						<div class="grey lighten-4 z-depth-1 col l7 slida valign-wrapper">
							<div class="valign">
								<h3 class="teal-text text-lighten-2"><?= ucfirst($use['nom']).' '.ucfirst($use['prenom']);?></h3>
								<?php if (strlen($use['description']) > 50): ?>

									<h5 class="light teal-text text-lighten-2"><?=chunk_split($use['description'])?></h5>

								<?php else: ?>
									<h5 class="light black-text text-lighten-3"><?= $use['description'];?></h5>
								<?php endif; ?>
					</div>
				</div>
				</li>
			<?php endforeach; ?>
	    </ul>
	  </div>
</div>
<h3 id="marge-titre" class="container grey lighten-4 z-depth-1 center-align shadow-effect teal-text text-lighten-2">Nos metiers</h3>
<div class="container">
	<div class="slider louil z-depth-1 shadow-effect" style="margin-bottom:5%;">
	    <ul class="slides louil" >
				<?php foreach ($users as $use): ?>
					<li class="row">
						<img class="col l5" src='<?= $this->assetUrl($use['photo']);?>'>
						<div class="grey lighten-4 z-depth-1 col l7 slida valign-wrapper">
							<div class="valign">
								<h3 class="teal-text text-lighten-2"><?= ucfirst($use['nom']).' '.ucfirst($use['prenom']);?></h3>
								<?php if (strlen($use['description']) > 50): ?>

									<h5 class="light teal-text text-lighten-2"><?=chunk_split($use['description'])?></h5>

								<?php else: ?>
									<h5 class="light black-text text-lighten-3"><?= $use['description'];?></h5>
								<?php endif; ?>
					</div>
				</div>
				</li>
			<?php endforeach; ?>
	    </ul>
	  </div>
</div>



<?php $this->stop('main_content') ?>
