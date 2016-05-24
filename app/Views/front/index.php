<?php $this->layout('layout', ['title' => 'Accueil']) ?>

<?php $this->start('main_content') ?>


<div class="container">
	<div class="slider louil z-depth-1 ">
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


</div>
	<h3 id="marge-titre" class="container grey lighten-4 z-depth-1 center-align  teal-text text-lighten-2">Les filières proposées</h3>
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
							<h2 class="lighten-2"><?= $met['section']?></h2>
							<a class="link-metier" href=""></a>
						</div>
					</div>
					<div class="text-works center">
						<!-- Modal Trigger -->
						<a class="waves-effect waves-light btn modal-trigger" href="#modal1"><?= $met['section']?></a>

						<!-- Modal Structure -->
						<div id="modal1" class="modal">
							<div class="modal-content">
								<h4><?= $met['section']?></h4>
								<p><?= $met['description']?></p>
							</div>
							<div class="modal-footer">
								<a href="<?= $this->url('formationsEtAteliers') ?>" class=" modal-action modal-close waves-effect waves-green btn-flat link-metier">Nos Formations</a>
								<a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Fermer</a>
							</div>
						</div>
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
