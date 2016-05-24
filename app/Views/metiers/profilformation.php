<?php $this->layout('layout', ['title' => 'profil formation']) ?>

<?php $this->start('main_content') ?>

<section id="presentation" class="container row grey lighten-4 z-depth-1 center-align teal-text text-lighten-2">
  <div class="col m6 l6 grey lighten-4 center-align teal-text text-lighten-2">
    <?php if(empty($formation['photo'])): ?>
      <img class="responsive-img" src="<?= $this->assetUrl('avatar/generic-avatar.png') ?>"/>
    <?php endif; ?>
    <?php if (!empty($formation['photo'])): ?>
      <img class="responsive-img" src="<?= $this->assetUrl($formation['photo']) ?>"/>
    <?php endif; ?>
  </div>
  <div class="col m6 l6">
    <h4><?= $formation['section'] ?></h4>

    <p class=""><?= $formation['description']?></p>
  </div>
  <div class="col m6 l6">
    <br>
    <a href="<?= $this->url('contact',['id' => $formation['id']])?>">Contacter</a>
  </div>
  <?php if(!empty($formation['niveau1'])): ?>
    <!-- Modal Trigger -->
    <a class="waves-effect waves-light btn modal-trigger" href="#modal1"><?= $formation['niveau1']?></a>

    <!-- Modal Structure -->
    <div id="modal1" class="modal">

      <div class="modal-content">
        <h4><?= $formation['niveau1']?></h4>
        <p><?= $formation['description1']?></p>
        <img src="<?= $formation['photoFormateur1']?>" alt="" />
        <h3><?= $formation['formateur1']?></h3>
        <p><?= $formation['descriptionFormateur1']?></p>
        <p><?= $formation['date1']?></p>
      </div>
      <div class="modal-footer">
        <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">DEMANDE D'INSCRIPTION</a>
        <button class="modal-close"type="button" name="button">Fermer</button>
      </div>
    </div>
  <?php endif; ?>
  <?php if(!empty($formation['niveau2'])): ?>
    <!-- Modal Trigger -->
    <a class="waves-effect waves-light btn modal-trigger" href="#modal1"><?= $formation['niveau2']?></a>

    <!-- Modal Structure -->
    <div id="modal1" class="modal">
      <div class="modal-content">
        <h4><?= $formation['niveau2']?></h4>
        <p><?= $formation['description2']?></p>
        <img src="<?=$formation['photoFormateur2']?>" alt="" />
        <h3><?= $formation['formateur2']?></h3>
        <p><?= $formation['descriptionFormateur2']?></p>
        <p><?= $formation['date2']?></p>
      </div>
      <div class="modal-footer">
        <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">DEMANDE D'INSCRIPTION</a>
        <button class="modal-close"type="button" name="button">Fermer</button>
      </div>
    </div>
  <?php endif; ?>
  <?php if(!empty($formation['niveau3'])): ?>
    <!-- Modal Trigger -->
    <a class="waves-effect waves-light btn modal-trigger" href="#modal1"><?= $formation['niveau3']?></a>

    <!-- Modal Structure -->
    <div id="modal1" class="modal">
      <div class="modal-content">
        <h4><?= $formation['niveau3']?></h4>
        <p><?= $formation['description3']?></p>
        <img src="<?= $formation['photoFormateur3']?>" alt="" />
        <h3><?= $formation['formateur3']?></h3>
        <p><?= $formation['descriptionFormateur3']?></p>
        <p><?= $formation['date3']?></p>
      </div>
      <div class="modal-footer">
        <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">DEMANDE D'INSCRIPTION</a>
        <button class="modal-close"type="button" name="button">Fermer</button>
      </div>
    </div>
  <?php endif; ?>
</section>


<?php $this->stop('main_content') ?>

<?php $this->start('script') ?>
<script type="text/javascript">
$('#mySwitch').prop('checked')
var pageUrl = '<?= $this->url('paginationsmetiers') ?>';
</script>
<?php $this->stop('script') ?>
