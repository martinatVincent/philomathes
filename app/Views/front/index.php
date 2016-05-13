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
</div>
<h3 id="marge-titre" class="container grey lighten-4 z-depth-1 center-align shadow-effect teal-text text-lighten-2">Les metiers</h3>
<div class="container">
  <ul class="pagination center">
    <?php for($i=1; $i<=$totalpages; $i++):?>
      <li class="waves-effect btn">
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
