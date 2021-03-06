<?php $this->layout('layout', ['title' => 'Metiers']) ?>

<?php $this->start('main_content') ?>

	<h3 id="marge-titre" class="container grey lighten-4 z-depth-1 center-align shadow-effect teal-text text-lighten-2">Nos domaines</h3>
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
					<div class="grey lighten-4 z-depth-1 valign-wrapper ">
						<div class=" contain-img">
							<img class="hov-zoom" src="<?= $met['photo']?>" alt="">
							<div class=" valign text-box">
								<h2 class="lighten-4">Voir les profils</h2>
								<a class="link-metier" href="metiers/<?= $met['alias']?>/profilsall"></a>
							</div>
						</div>
						<div class="text-works center valign-wrapper">
							<h6><?= $met['section']?></h6>
							<p class="valign"><?= mb_substr($met['description'], 0 , 400 ).'...'?></p>
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
