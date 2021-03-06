<?php $this->layout('layout',['title' => 'Insertion Formations']) ?>
<?php $this->start('main_content') ?>
<div class="container center">
  <h3 id="marge-titre" class="container grey lighten-4 z-depth-1 center-align shadow-effect teal-text text-lighten-2">Inserer une nouvelle formation</h3>
  <div class="row">

    <form method="POST" class="col s12 m12 l6 offset-l3" enctype="multipart/form-data">
      <div class="input-field ">

        <div class="input-field">
          <i class="material-icons prefix">subtitles</i>
          <label for="section">Intitulé formation</label>
          <input type="text" name="section" placeholder="section">
        </div>
        
        <div class="input-field">
          <i class="material-icons prefix">receipt</i>
          <label for="description">Description</label>
          <textarea name="description" class="materialize-textarea" placeholder="Votre description"></textarea>
        </div>
        
        <div class="input-field">
          <i class="material-icons prefix">youtube_searched_for</i>
          <label id="alias-m" for="alias">alias metier</label>
          <input id="alias" type="text" name="alias" placeholder="alias section">
        </div>

        
        <div class="file-field input-field">
        <div class="btn btn-add">
          <span class="add">photo </span>
          <input type="file"  id="photo" name="photo">
        </div>
        <div class="file-path-wrapper">
          <input class="file-path validate" type="text">
        </div>
      </div>

        <div> 
          <h5>Inserer un niveau</h5>
          <i class="fa fa-plus-circle" aria-hidden="true" id="plus" title="Ajouter une session"></i>
          <i class="fa fa-minus-circle" aria-hidden="true" id="moins" title="Supprimer une session"></i>
        </div>

        <div class="input-field margetop">
          <input type="submit" name="but" value="Envoyer" class="waves-effect waves-light btn">
        </div>
      </form>

    </div>

    <?php if(!empty($errors)) :?>
      <div class="section">
        <p class='red-text text-darken-1'>
          <?= implode('<br />', $errors)?>
        </p>
      </div>
    <?php endif; ?>
    <?php if(!empty($success)) :?>
      <div class="section">
        <p class='green-text text-darken-1'><?=$success?></p>
      </div>
    <?php endif; ?>

    <?php $this->stop('main_content') ?>
