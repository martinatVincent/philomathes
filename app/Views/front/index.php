<?php $this->layout('layout', ['title' => 'Accueil']) ?>

<?php $this->start('main_content') ?>


<div class="slider z-depth-1">
  <ul class="slides">
    <li>
      <img src="http://static.panoramio.com/photos/original/12271445.jpg"> <!-- random image -->
      <div class="caption center-align">
        <h3 class="teal lighten-2"></h3>
        <h5 class="light grey-text text-lighten-3"></h5>
      </div>
    </li>
    <li>
      <img src="http://www.sources-caudalie.com/blog/wp-content/uploads/2015/06/Place_de_la_Bourse_Bordeaux_France.jpg"> <!-- random image -->
      <div class="caption center-align">
        <h3 class="teal lighten-2"></h3>
        <h5 id="sous-titre" class="light grey-text text-lighten-3"></h5>
      </div>
    </li>
    <li>
      <img src="http://www.hyperbolyk-blog.com/wp-content/uploads/2014/10/formation.png"> <!-- random image -->
      <div class="caption center-align">
        <h3 class="teal lighten-2"></h3>
        <h5 class="light grey-text text-lighten-3"></h5>
      </div>
    </li>
    <li>
      <img src="http://www.wf3.fr/wp-content/uploads/2015/03/DSC_0106.jpg"> <!-- random image -->
      <div class="caption center-align">
        <h3 class="teal lighten-2"></h3>
        <h5 class="light grey-text text-lighten-3"></h5>
      </div>
    </li>
  </ul>
</div>
<div id="titre-index" class="row section center container">
  <h3 id="marge-titre" class="container grey lighten-4 z-depth-1 center-align shadow-effect teal-text text-lighten-2">Qui sommes nous?</h3>
  <p class="grey lighten-4 z-depth-1 center-align teal-text text-lighten-2">
    Nous sommes un Organisme de formation et d’actions culturelles a Bordeaux. Une association pour la promotion, la valorisation et la diffusion des sciences, lettres, arts et techniques a Bordeaux et en Aquitaine. Ses principaux moyens d’action sont la formation permanente, et les conférences, débats, rencontres et expositions.
  </p>
  <a class="btn btn-5 shadow-effect" id="index-contact" href="<?= $this->url('contactAdmin') ?>">Nous contacter<a/>
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
