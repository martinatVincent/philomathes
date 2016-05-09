<?php $this->layout('layout', ['title' => 'Actu']) ?>

<?php $this->start('main_content') ?>

	<h3 id="marge-titre" class="container grey lighten-4 z-depth-1 center-align shadow-effect teal-text text-lighten-2">Nos Actualités</h3>
	<div class="container">
		<ul class="pagination center">
			<?php for($i=1; $i<=$totalpages; $i++):?>
				<li class="waves-effect btn">
					<a class="paginations paginact white-text" href="<?= $i?>"><?= $i?></a>
				</li>
			<?php endfor;?>
		</ul>
	</div>

	<section id="allworks" class="row section container">
		<?php foreach ($actus as $act):?>
				<article class="col s12 m6 l4">
					<div class="grey lighten-4 z-depth-1">
						<div class=" contain-img">
							<img class="hov-zoom" src="<?= $act['photo']?>" alt="">
							</div>
						</div>
						<div class="text-works center">
							<h6><?= $act['section']?></h6>
							<p class=""><?= mb_substr($act['description'], 0 , 400 ).'...'?></p>
						</div>
					</div>
				</article>
		<?php endforeach;?>
	</section>
<?php $this->stop('main_content') ?>

<?php $this->start('script') ?>
	<script type="text/javascript">
		var pageUrl = '<?= $this->url('paginationsactus') ?>';
	</script>
<?php $this->stop('script') ?>
