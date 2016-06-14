<?php $this->layout('layout', ['title' => 'Actu']) ?>

<?php $this->start('main_content') ?>

	<h3 id="marge-titre" class="container grey lighten-4 z-depth-1 center-align  teal-text text-lighten-2">Nos Actualités</h3>
	<div class="container">
		<ul class="pagination center">
			<?php for($i=1; $i<=$totalpages; $i++):?>
				<li class="waves-effect btn">
					<a class="paginations paginact white-text" href="<?= $i?>"><?= $i?></a>
				</li>
			<?php endfor;?>
		</ul>
	</div>
	<?php
		// Si $articles contient notre contenu, on affiche le tout
		if(isset($actus) && !empty($actus)):
	?>


	<section class="row section container">
		<?php foreach ($actus as $act):?>
			<article class="col s12 m12 l12  center articleActus card-panel z-depth-1 teal">
				<div class="">
					<div class=" col s12 m12 l4 mcontain-img">
						<div >
							<img class="imageActus" src="<?= $this->assetUrl('img/'.$act['photo']) ?>" alt="">
						</div>
						<p>Article posté le <?= date('d/m/Y H:i', strtotime($act['date'])); ?></p>
					</div>
				</div>
					<div class="row ">
				    <div class="col s12 m12 l8 ">
				        <div class="card-panel ">
					        <span class="black-text">
								<h2 class="title-post"><?= $act['titre'];?></h2>
								<p class="flow-text"><?= mb_substr($act['description'], 0 , 400 ); ?>
									<a href="<?= $this->url('articleDetails', ['id'=> $act['id']]) ?>" class="link"> Lire la suite &raquo; </a>
								</p>
					        </span>
				        </div>
				    </div>
			    </div>
			</article>

		<?php endforeach;?>

	</section>
	<?php endif; ?>
<?php $this->stop('main_content') ?>

<?php $this->start('script') ?>
	<script type="text/javascript">
		var pageUrl = '<?= $this->url('paginationsactus') ?>';
	</script>
<?php $this->stop('script') ?>
