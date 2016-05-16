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
</section>


<?php $this->stop('main_content') ?>

<?php $this->start('script') ?>
<script type="text/javascript">
$('#mySwitch').prop('checked')
var pageUrl = '<?= $this->url('paginationsmetiers') ?>';
</script>
<?php $this->stop('script') ?>
