$(document).ready(function(){
  $('.slider').slider({full_width: true});
  var H = $('.slider').height();
  $('.slider').height(H-40);

});

$(".button-collapse").sideNav({
  edge: 'right'
});
  $(document).ready(function(){
    $('.collapsible').collapsible({
      accordion : false // A setting that changes philomathes the collapsible behavior to expandable instead of the default accordion style
    });
  });
  $('select').material_select();
  $(function(){
    $('.pagination li:first-child').addClass('active');
  });
  $(function(){
    $('.paginations.pagincomms').click(function(e){
      e.preventDefault();
      var href = $(this).attr('href');
      $('.pagination li').removeClass('active');
      $(this).parent().removeClass('waves-effect').addClass('active');
      var data = {
        page: href
      }
      $.ajax({
        url: pageUrl,
        data: data,
        success: function(reponse) {
          $('.comments').empty();
          for (m in reponse) {
            var h5 = ($('<h5>').addClass('center-align').text('Commentaire de'+' '+reponse[m].prenomUser+' '+reponse[m].nomUser));
            var htmlcomms =
            ($('<div>').attr('id', 'com-project').addClass('grey').addClass('lighten-2')
            .append($('<h7>').text(reponse[m].titre))
            .append($('<p>').text(reponse[m].comments))
            .append($('<p>').addClass('date-publi').text('publié le'+' '+reponse[m].date)))
            .insertAfter($('<h5>').addClass('center-align').text('Commentaire de'+' '+reponse[m].prenomUser+' '+reponse[m].nomUser))
            $('.comments').append(h5).append(htmlcomms);
          }
        }
      })
    });
  })
  $(function(){
    $('.paginations.paginallprofiles').click(function(e){
      e.preventDefault();
      var href = $(this).attr('href');
      $('.pagination li').removeClass('active');
      $(this).parent().removeClass('waves-effect').addClass('active');
      var data = {
        page: href
      }
      $.ajax({
        url: pageUrl,
        data: data,
        success: function(reponse) {
          $('#allworks').empty();
          for (m in reponse) {
            if (reponse[m].photo.length == 0) {
              var img = '/philomathes/public/assets/avatar/generic-avatar.png';
            }
            if (reponse[m].photo.length !== 0) {
              var img = '/philomathes/public/assets/'+reponse[m].photo;
            }
            var htmlProfils = $('<article>')
            .addClass('col')
            .addClass('l4')
            .addClass('m6')
            .addClass('s12')
            .append($('<div>')
            .addClass('grey')
            .addClass('lighten-4')
            .addClass('z-depth-1')
            .append($('<div>').addClass('contain-img')
            .append($('<img>').attr('src', img).addClass('photo-work').addClass('responsive-img').addClass('hov-zoom'))
            .append($('<div>').addClass('text-box')
            .append($('<h2>').text('Visiter le Profil').addClass('lighten-4'))
            .append($('<a>').attr('href',  '/philomathes/public/profil/profiluser/'+reponse[m].id).addClass('link-metier'))))
            .append($('<div>').addClass('text-works')
            .addClass('center')
            .append($('<h6>').text(reponse[m].prenom+' '+reponse[m].nom))
            .append($('<p>').text(reponse[m].description))))
            $('#allworks').append(htmlProfils);
          }
        }
      })
    });
  })
  $(function(){
    $('.paginations.paginmet').click(function(e){
      e.preventDefault();
      var href = $(this).attr('href');
      $('.pagination li').removeClass('active');
      $(this).parent().removeClass('waves-effect').addClass('active');
      var data = {
        page: href
      }
      $.ajax({
        url: pageUrl,
        data: data,
        success: function(reponse) {
          $('#allworks').empty();
          for (m in reponse) {
            var htmlMetier = $('<article>')
            .addClass('col')
            .addClass('l4')
            .addClass('m6')
            .addClass('s12')
            .append($('<div>')
            .addClass('grey')
            .addClass('lighten-4')
            .addClass('z-depth-1')
            .append($('<div>')
            .addClass('contain-img')
            .append($('<img>').attr('src', reponse[m].photo).addClass('hov-zoom'))
            .append($('<div>').addClass('text-box')
            .append($('<h2>').text('Voir les profils').addClass('lighten-4'))
            .append($('<a>').attr('href', '/philomathes/public/metiers/'+reponse[m].alias+'/profilsall').addClass('link-metier'))))
            .append($('<div>').addClass('text-works')
            .addClass('center')
            .append($('<h6>').text(reponse[m].section))
            .append($('<p>').text(reponse[m].description))))
            $('#allworks').append(htmlMetier);
          }
        }
      })
    });
  })
  $(function(){
    $('.paginations.paginprofil').click(function(e){
      e.preventDefault();
      var href = $(this).attr('href');
      $('.pagination li').removeClass('active');
      $(this).parent().removeClass('waves-effect').addClass('active');
      var data = {
        page: href
      }
      $.ajax({
        url: pageUrl,
        data: data,
        success: function(reponse) {
          $('#allworks').empty();
          for (m in reponse) {
            if (reponse[m].photo.length == 0) {
              var img = '/philomathes/public/assets/avatar/generic-avatar.png';
            }
            if (reponse[m].photo.length !== 0) {
              var img = '/philomathes/public/assets/'+reponse[m].photo;
            }
            var htmlProfils = $('<article>')
            .addClass('col')
            .addClass('l4')
            .addClass('m6')
            .addClass('s12')
            .append($('<div>')
            .addClass('grey')
            .addClass('lighten-4')
            .addClass('z-depth-1')
            .append($('<div>').addClass('contain-img')
            .append($('<img>').attr('src', img).addClass('photo-work').addClass('responsive-img').addClass('hov-zoom'))
            .append($('<div>').addClass('text-box')
            .append($('<h2>').text('Visiter le Profil').addClass('lighten-4'))
            .append($('<a>').attr('href',  '/philomathes/public/profil/profiluser/'+reponse[m].id).addClass('link-metier'))))
            .append($('<div>').addClass('text-works')
            .addClass('center')
            .append($('<h6>').text(reponse[m].prenom+' '+reponse[m].nom))
            .append($('<p>').text(reponse[m].description))))
            $('#allworks').append(htmlProfils);
          }
        }
      })
    });
  })
  $(document).ready(function(){
    $('.collapsible').collapsible({
      accordion : false // A setting that changes the collapsible behavior to expandable instead of the default accordion style
    });
  });







/////////////////////////////////////////////////////////////////////////////////////////////////////////////////

  //Pagination Atelier et formation
  $(function(){
    $('.paginations.paginat').click(function(e){
      e.preventDefault();
      var href = $(this).attr('href');
      $('.pagination li').removeClass('active');
      $(this).parent().removeClass('waves-effect').addClass('active');
      var data = {
        page: href
      }
      $.ajax({
        url: pageUrl,
        data: data,
        success: function(reponse) {
          $('#allworks').empty();
          for (m in reponse) {
            var htmlMetier = $('<article>')
            .addClass('col')
            .addClass('l4')
            .addClass('m6')
            .addClass('s12')
            .append($('<div>')
            .addClass('grey')
            .addClass('lighten-4')
            .addClass('z-depth-1')
            .append($('<div>')
            .addClass('contain-img')
            .append($('<img>').attr('src', reponse[m].photo).addClass('hov-zoom'))
            .append($('<div>').addClass('text-box')
            .append($('<h2>').text('Voir les profils').addClass('lighten-4'))
            .append($('<a>').attr('href', '/philomathes/public/metiers/'+reponse[m].alias+'/profilsall').addClass('link-metier'))))
            .append($('<div>').addClass('text-works')
            .addClass('center')
            .append($('<h6>').text(reponse[m].section))
            .append($('<p>').text(reponse[m].description))))
            $('#allworks').append(htmlMetier);
          }
        }
      })
    });
  })




$(function(){
    $('.paginations.paginform').click(function(e){
      e.preventDefault();
      var href = $(this).attr('href');
      $('.pagination li').removeClass('active');
      $(this).parent().removeClass('waves-effect').addClass('active');
      var data = {
        page: href
      }
      $.ajax({
        url: pageUrl,
        data: data,
        success: function(reponse) {
          $('#allworks').empty();
          for (m in reponse) {
            var htmlMetier = $('<article>')
            .addClass('col')
            .addClass('l4')
            .addClass('m6')
            .addClass('s12')
            .append($('<div>')
            .addClass('grey')
            .addClass('lighten-4')
            .addClass('z-depth-1')
            .append($('<div>')
            .addClass('contain-img')
            .append($('<img>').attr('src', reponse[m].photo).addClass('hov-zoom'))
            .append($('<div>').addClass('text-box')
            .append($('<h2>').text('Voir les profils').addClass('lighten-4'))
            .append($('<a>').attr('href', '/philomathes/public/metiers/'+reponse[m].alias+'/profilsall').addClass('link-metier'))))
            .append($('<div>').addClass('text-works')
            .addClass('center')
            .append($('<h6>').text(reponse[m].section))
            .append($('<p>').text(reponse[m].description))))
            $('#allworks').append(htmlMetier);
          }
        }
      })
    });
  })

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////


  // Modals de matérialize

  // pour ouvrir le modal:
  $(document).ready(function(){
    // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggere
    $('#modal1').openModal();
    // Pour fermer le modal:
    $('#modal1').closeModal();
    // Parametre du modal :
    $('.modal-trigger').leanModal({
      dismissible: true, // Modal can be dismissed by clicking outside of the modal
      opacity: .5, // Opacity of modal background
      in_duration: 300, // Transition in duration
      out_duration: 200, // Transition out duration
    });
  });










///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


//AJOUTE AU CLIC SUR + OU SUPPRIME AU - DES CHAMPS POUR INSERER DES SESSIONS COMME CAP BEP ETC...

$( "#plus").click(function(){
  
  if($("div.session1").length && !$("div.session2").length && !$("div.session3").length){
    $('<div class="session session2"><h5>Session 2</h5><br><div class="input-field"><label for="niveau2">niveau2: </label><input type="text" placeholder="CAP, BEP, etc..." name="niveau2"></div><div class="input-field"><label for="date2">session2: </label><input type="text" placeholder="24/01/2017 au 17/05/2017" name="date2"></div><div class="input-field"><label for="description2">description2: </label><input type="text" name="description2"></div><div class="input-field"><label for="formateur2">formateur2: </label><input type="text" placeholder="Dark Vador" name="formateur2"></div><div class="input-field"><div class="btn btn-add"><span class="add">photoFormateur2: </span><input type="file"  id="photo" name="photoFormateur2"></div><div class="file-path-wrapper"><input class="file-path validate" type="text"></div></div><div class="input-field"><label for="descriptionFormateur2">description du formateur2: </label><input type="text" placeholder="jedi du coté obscur ..." name="descriptionFormateur2"></div></div>').insertBefore($('#plus'));
  }
  else if($("div.session2").length && $("div.session1").length && !$("div.session3").length){
    $('<div class="session session3"><h5>Session 3</h5><br><div class="input-field"><label for="niveau3">niveau3: </label><input type="text" placeholder="CAP, BEP, etc..." name="niveau3"></div><div class="input-field"><label for="date3">session3: </label><input type="text" placeholder="24/01/2017 au 17/05/2017" name="date3"></div><div class="input-field"><label for="description3">description3: </label><input type="text" name="description3"></div><div class="input-field"><label for="formateur3">formateur3: </label><input type="text" placeholder="Dark Vador" name="formateur3"></div><div class="input-field"><div class="btn btn-add"><span class="add">photoFormateur3: </span><input type="file"  id="photo" name="photoFormateur3"></div><div class="file-path-wrapper"><input class="file-path validate" type="text"></div></div><div class="input-field"><label for="descriptionFormateur3">description du formateur3: </label><input type="text" placeholder="jedi du coté obscur ..." name="descriptionFormateur3"></div></div>').insertBefore($('#plus'));
  }
  else if(!$("div.session1").length && !$("div.session2").length && !$("div.session3").length){
    $('<div class="session session1"><h5>Session 1</h5><br><div class="input-field"><label for="niveau1">niveau1: </label><input type="text" placeholder="CAP, BEP, etc..." name="niveau1"></div><div class="input-field"><label for="date1">session1: </label><input type="text" placeholder="24/01/2017 au 17/05/2017" name="date1"></div><div class="input-field"><label for="description1">description1: </label><input type="text" name="description1"></div><div class="input-field"><label for="formateur1">formateur1: </label><input type="text" placeholder="Dark Vador" name="formateur1"></div><div class="input-field"><div class="btn btn-add"><span class="add">photoFormateur1: </span><input type="file"  id="photo" name="photoFormateur1"></div><div class="file-path-wrapper"><input class="file-path validate" type="text"></div></div><div class="input-field"><label for="descriptionFormateur1">description du formateur1: </label><input type="text" placeholder="jedi du coté obscur ..." name="descriptionFormateur1"></div></div>').insertBefore($('#plus'));
  }
});

$("#moins").click(function(){
  var derniereSession = $('div.session:last')
  derniereSession.remove();
});



/*
LES CHAMPS S'AJOUTANT AU + DANS INSERT FORMATION POUR AJOUTER DES SESSIONS CAP BEP ETC... D'UN MEME METIER


<h5>Session 1</h5><br>
<div class="input-field">
  <label for="niveau1">niveau1: </label><input type="text" placeholder="CAP, BEP, etc..." name="niveau1">
</div>
<div class="input-field">
  <label for="date1">date1: </label><input type="text" placeholder="24/01/2017 au 17/05/2017" name="date1">
</div>
<div class="input-field">
  <label for="description1">description1: </label><input type="text" name="description1">
</div>
<div class="input-field">
  <label for="formateur1">formateur1: </label><input type="text" placeholder="Dark Vador" name="formateur1">
</div>
<div class="input-field">
  <div class="btn btn-add">
    <span class="add">photoFormateur1: </span>
    <input type="file"  id="photo" name="photoFormateur1">
  </div>
  <div class="file-path-wrapper">
    <input class="file-path validate" type="text">
  </div>
</div>
<div class="input-field">
  <label for="descriptionFormateur1">descriptionFormateur1: </label><input type="text" placeholder="jedi du coté obscur ..." name="descriptionFormateur1">
</div>


<h5>Session 2</h5><br>
<div class="input-field">
  <label for="niveau2">niveau2: </label><input type="text" placeholder="CAP, BEP, etc..." name="niveau2">
</div>
<div class="input-field">
  <label for="date2">date2: </label><input type="text" placeholder="24/01/2017 au 17/05/2017" name="date2">
</div>
<div class="input-field">
  <label for="description2">description2: </label><input type="text" name="description2">
</div>
<div class="input-field">
  <label for="formateur2">formateur2: </label><input type="text" placeholder="Dark Vador" name="formateur2">
</div>
<div class="input-field">
  <div class="btn btn-add">
    <span class="add">photoFormateur2: </span>
    <input type="file"  id="photo" name="photoFormateur2">
  </div>
  <div class="file-path-wrapper">
    <input class="file-path validate" type="text">
  </div>
</div>
<div class="input-field">
  <label for="descriptionFormateur2">descriptionFormateur2: </label><input type="text" placeholder="jedi du coté obscur ..." name="descriptionFormateur2">
</div>


<h5>Session 3</h5><br>
<div class="input-field">
  <label for="niveau3">niveau3: </label><input type="text" placeholder="CAP, BEP, etc..." name="niveau3">
</div>
<div class="input-field">
  <label for="date3">date3: </label><input type="text" placeholder="24/01/2017 au 17/05/2017" name="date3">
</div>
<div class="input-field">
  <label for="description3">description3: </label><input type="text" name="description3">
</div>
<div class="input-field">
  <label for="formateur3">formateur3: </label><input type="text" placeholder="Dark Vador" name="formateur3">
</div>

<div class="input-field">
  <div class="btn btn-add">
    <span class="add">photoFormateur3: </span>
    <input type="file"  id="photo" name="photoFormateur3">
  </div>
  <div class="file-path-wrapper">
    <input class="file-path validate" type="text">
  </div>
</div>

<div class="input-field">
  <label for="descriptionFormateur3">descriptionFormateur3: </label><input type="text" placeholder="jedi du coté obscur ..." name="descriptionFormateur3">
</div>
*/



