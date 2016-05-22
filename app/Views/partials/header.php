<header>
	<div class="logo-head center">
		<h5 class="center">
			<img class="center" id="logo-index" src="<?= $this->assetUrl('img/LogoPhilomathique.png') ?>">
		</h5>
	</div>
	<nav class="teal">
		<div class="nav-wrapper"> <!-- container retrait test-->
			<a href="<?= $this->url('index') ?>">
				<img class="left" src="<?= $this->assetUrl('img/LogoPhilomathique.png') ?>"></img>
			</a>
			<ul id="dropdown1" class="dropdown-content">
				<li><a href="<?= $this->url('profiluser', ['id' => $_SESSION['user']['id'] ])?>">Mon profil</a></li>
			  	<li class="divider"></li>
			  	<li><a href="<?= $this->url('updateProfil') ?>">Mes infos</a></li>
			  	<li class="deconectNav" ><a href="<?= $this->url('deconnect') ?>">Se deconnecter</a></li>
			  	<?php if($w_user['role']=='Admin'):?>
	  				<li><a href="<?= $this->url('insertProfil') ?>">Entrer un nouvel utilisateur</a></li>
	  			<?php endif;?>
	  			<?php if($w_user['role']=='Admin'):?>
	  				<li><a href="<?= $this->url('insertSection') ?>">Entrer une nouvelle formation/atelier</a></li>
	  			<?php endif;?>
				<?php if($w_user['role']=='Admin'):?>
	  				<li><a href="<?= $this->url('insertMetiers') ?>">Entrer un nouveau metier</a></li>
	  			<?php endif;?>
				<?php if($w_user['role']=='Admin'):?>
	  				<li><a href="<?= $this->url('insertActus') ?>">Entrer une nouvelle actualité</a></li>
	  			<?php endif;?>
				<?php if($w_user['role']=='Admin'):?>
	  				<li><a href="<?= $this->url('deleteProfil')?>">Supprimer un profil</a></li>
	  			<?php endif;?>
	  			<?php if($w_user['role']!='Admin'):?>
	  				<li><a href="<?= $this->url('deleteaccount', ['id' => $_SESSION['user']['id'] ])?>">Supprimer mon profil</a></li>
	  			<?php endif;?>
				
			</ul>
			<ul id="dropdown2" class="dropdown-content">
				<form class="center " action="<?= $this->url('recherche') ?>" method="GET">
					<div class="row" id="search">
						<input type="search" name="search" class="col l8 offset-l2 black-text" placeholder="Votre recherche">
					</div>
					<div class="input-field row">
						<div class="col l6">
							<input name="valeur" type="radio" id="test1" value="user"/>
							<label for="test1">Par Utilisateur</label>
						</div>
						<div class="col l6">
							<input name="valeur" type="radio" id="test2" value="metier" />
							<label for="test2">Par Métier</label>
						</div>
					</div>
					<div class="row">
						<button type="submit" class="btn waves-effect waves-light" id="searchbut">cherche</button>
					</div>
				</form>
			</ul>



			<ul id="mobile-demo" class=" col s12 m6 l4 right side-nav">
				<li class="white">
					<ul data-collapsible="accordion" class="collapsible">
						<li>
							<div class="collapsible-header white">
								<p class="black-text"><i class="material-icons search black-text">search</i>Recherche</p>
							</div>
							<form class="center collapsible-body" action="<?= $this->url('recherche') ?>" method="GET" >
								<div class="col l6" id="search">
									<input type="search" name="search" class="col l8 offset-l2 black-text" placeholder="Votre recherche">
								</div>
								<div class="input-field">
									<div class="col l6">
										<input name="valeur" type="radio" id="test3" value="user"/>
										<label for="test3">Par Utilisateur</label>
									</div>
									<div class="col l6">
										<input name="valeur" type="radio" id="test4" value="metier" />
										<label for="test4">Par Métier</label>
									</div>
								</div>
								<div>
									<button type="submit" class="btn waves-effect waves-light col l4 offset-l4" id="searchbut">cherche</button>
								</div>
							</form>
						</li>
					</ul>
				</li>
				<li class="white"><a href="<?= $this->url('metiers') ?>" class="white">Metiers</a></li>
				<?php if(isset($_SESSION['user']['id'])): ?><li class="white"><a href="<?= $this->url('allprofiles') ?>" class="white">Les profils</a></li><?php endif;?>
				<?php if(!$w_user) :?><li class="white"><a href="<?= $this->url('connect') ?>" class="white">Se connecter</a></li><?php endif;?>
				<?php if($w_user) :?><li class="white"><a href="<?= $this->url('deconnect') ?>" class="white">Se deconnecter</a></li><?php endif;?>
				<?php if($w_user) :?>
					<li class="white">
						<ul data-collapsible="accordion" class="collapsible">
							<li>
								<div class="collapsible-header white black-text">
								<?php if($w_user['role']=='Admin'):?>
									<img src="<?= $this->assetUrl($w_user['photo']) ?>" alt="" class="left circle profilePic" id="circleprofil"/>
										&nbsp;&nbsp;&nbsp;Admin
										<i class="material-icons right black-text">arrow_drop_down</i>
								<?php endif;?>		
								<?php if($w_user['role']!='Admin'):?>
									<img src="<?= $this->assetUrl($w_user['photo']) ?>" alt="" class="left circle profilePic" id="circleprofil"/>
										&nbsp;&nbsp;&nbsp;Mon profil
										<i class="material-icons right black-text">arrow_drop_down</i>
								<?php endif;?>
								</div>
								<form class="center collapsible-body" action="<?= $this->url('recherche') ?>" method="GET" >
									<a class="center" href="<?= $this->url('profiluser', ['id' => $_SESSION['user']['id'] ])?>">Mon profil</a>
								  	<a class="black-text" href="<?= $this->url('updateProfil') ?>">Mes infos</a>
								  	<a class="btn btn-5" href="<?= $this->url('deconnect') ?>">Se deconnecter</a>
								  	<?php if($w_user['role']=='Admin'):?>
						  			<a class="black-text" href="<?= $this->url('insertProfil') ?>">Entrer un nouvel utilisateur</a>
						  			<?php endif;?>
						  			<?php if($w_user['role']=='Admin'):?>
						  			<a class="black-text" href="<?= $this->url('insertSection') ?>">Entrer une nouvelle section</a>
									
			  						<?php endif;?>
			  						<?php if($w_user['role']=='Admin'):?>
						  				<li><a href="<?= $this->url('deleteProfil')?>">Supprimer un profil</a></li>
						  			<?php endif;?>
						  			<?php if($w_user['role']!='Admin'):?>
						  				<li><a href="<?= $this->url('deleteaccount', ['id' => $_SESSION['user']['id'] ])?>">Supprimer mon profil</a></li>
						  			<?php endif;?>
								</form>
							</li>
						</ul>
					</li>
				<?php endif;?>
			</ul>
			<ul id="nav-resp" class=" col s12 m6 l4 right hide-on-med-and-down">
				<li>
					<a href="#" class="dropdown-button" data-beloworigin="true" data-hover="true" data-constrainwidth="false" data-activates="dropdown2" >
					<i class="material-icons search">search</i>
					</a>
				</li>
				<li><a class="btn btn-5"href="<?= $this->url('actus') ?>">Actualités</a></li>
				<li><a class="btn btn-5" href="<?= $this->url('formationsEtAteliers') ?>">Formation</a></li>
				<li><a class="btn btn-5" href="<?= $this->url('allprofiles') ?>">Les Philomathes</a></li>
				<li><a class="btn btn-5" href="#">Philo connect</a></li>
				<?php if(!$w_user) :?><li><a class="btn btn-5"href="<?= $this->url('connect') ?>">Se connecter</a></li><?php endif;?>
				
				<?php if($w_user && $w_user['role']!='Admin')  :?>
					<li>
						<a href="#" class="col l6 dropdown-button" data-beloworigin="true" data-activates="dropdown1" id="loginfo">
								<img src="<?= $this->assetUrl($w_user['photo']) ?>" alt="" class="left circle  profilePic" id="circleprofil"/>
						&nbsp;&nbsp;&nbsp;Mon profil
						<i class="material-icons right">arrow_drop_down</i>
					</a>
					</li>
				<?php endif;?>
				<?php if($w_user['role']=='Admin')  :?>
					<li>
						<a href="#" class="col l6 dropdown-button" data-beloworigin="true" data-activates="dropdown1" id="loginfo">
								<img src="<?= $this->assetUrl($w_user['photo']) ?>" alt="" class="left circle  profilePic" id="circleprofil"/>
						&nbsp;&nbsp;&nbsp;Options admin
						<i class="material-icons right">arrow_drop_down</i>
					</a>
					</li>
				<?php endif;?>
			</ul>
			<a href="#" data-activates="mobile-demo" class="button-collapse right"><i class="material-icons">menu</i></a>
		</div>
	</nav>
</header>
