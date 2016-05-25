<?php $this->layout('layout', ['title' => 'Accueil']) ?>

<?php $this->start('main_content') ?>


<div class="container">
	<div class="s8 offset-s2 col m8 offset-m2 l6 offset-l3 center align card-panel grey lighten-3 margetop box shadow-effect">
			<h3 class="teal-text text-lighten-2">ECOLE POLY-TECHNIQUES FONDEE EN 1869</h3>
	</div>
	<br><br>
	<div class="slider louil z-depth-1 ">
		<ul class="slides louil" >
			<?php foreach ($actus as $act) : ?>
				<li class="row">
					<img class="col l7" src='<?= $this->assetUrl('/img/'.$act['photo']);?>'>
					<div class="grey lighten-4 z-depth-1 col l5 slida valign-wrapper">
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
<section>
	<div >

	</div>
</section>
	<?php $this->stop('main_content') ?>

	<?php $this->start('script') ?>
	<script type="text/javascript">
	</script>
	<?php $this->stop('script') ?>
