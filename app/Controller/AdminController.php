<?php

namespace Controller;

use \W\Controller\Controller;
use \Model\BlogModel;
use \W\Security\AuthentificationModel;
use Model\DeleteAccountModel;
use \W\Model\UsersModel;
use \Model\MetiersModel;
use \Model\FormationsModel;
use \Model\AteliersModel;
use \PHPMailer;
use \config;
use Model\ActusModel;

class AdminController extends Controller
{
	public function insertProfil(){
		$this->allowTo(['Admin']);
		$login = new AuthentificationModel();
		$userModel = new UsersModel;
		$metiers = new MetiersModel();
		$toutmetiers = $metiers->findAll();
		$errors = array();
		$params = array(); // Les paramètres qu'on envoi a la vue, on utilisera les clés du tableau précédé par un $ pour les utiliser dans la vue
		// Faire vérification des champs ICI
		if(!empty($_POST)){
			// Faire vérification des champs ICI
			if(empty($_POST['nom'])){
				$errors[] = 'le nom est vide';
			}
			if(empty($_POST['prenom'])){
				$errors[] = 'le prenom est vide';
			}
			if(empty($_POST['email'])){
				$errors[] = 'l\'email est vide';
			}
			if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) !== false){
				$errors[] = 'L\'email est invalide';
			}
			if (empty($_POST['pass'])) {
				$errors[]='le mot de passe est vide';
			}
			// il n'y a pas d'erreurs,  inserer l'utilisateur a bien rentré en bdd :
			if(count($errors) == 0){

				$userModel->insert([
					'nom' 		=> $_POST['nom'],
					'prenom' 	=> $_POST['prenom'],
					'email' 	=> $_POST['email'],
					'id_metier' 	=> $_POST['section'],
					'role' 	=> 'user',
					'password' 	=> password_hash($_POST['pass'],PASSWORD_DEFAULT)
				]);
			}
			// sinon on affiche les erreurs:
			else{
				$params['errors'] = $errors;
			}
			$params['success'] = 'votre nouveau profil à bien été enregistré !';
		}
		$params['section'] = $toutmetiers;
		$this->show('admin/insertprofil', $params);
	}


	public function test(){
		$this->show('admin/insertSection');
	}


	////////////////////////////////////////////////////////////
	//INSERER METIER => FORMATION + ATELIER
	public function insertMetiers(){
		$this->allowTo(['Admin']);
		$login = new AuthentificationModel();
		$MetiersModel = new MetiersModel();
		$errors = array();
		$params = array(); // Les paramètres qu'on envoi a la vue, on utilisera les clés du tableau précédé par un $ pour les utiliser dans la vue
		// Faire vérification des champs ICI
		$maxSize = 3024 * 3000; // 1Ko * 1000 = 1Mo
		$dirUpload = '/assets/img';
		$mimeTypeAllowed = array('image/jpg', 'image/jpeg', 'image/png');

		if(!empty($_POST)){
			// Faire vérification des champs ICI
			if(empty($_POST['alias'])){
				$errors[] = 'l alias est vide';
			}
			if(empty($_POST['description'])){
				$errors[] = 'la description est vide';
			}
			if(empty($_POST['section'])){
				$errors[] = 'la section est vide';
			}
			if(empty($_POST['photo'])){
				$errors[] = 'veuiller entrer une photo';
			}

			// il n'y a pas d'erreurs,  inserer la section a bien rentré en bdd :
			if(count($errors) == 0){
				$MetiersModel->insert([
					'section' 	  	=> $_POST['section'],
					'alias' 		=> $_POST['alias'],
					'description' 	=> $_POST['description'],
					'photo' 	    => $_POST['photo'],
				]);

				$params['success'] = 'votre nouvelle formation à bien été rajouté !';
			}
			// sinon on affiche les erreurs:
			else{
				$params['errors'] = $errors;
			}

		}

		$this->show('admin/insertMetiers', $params);
	}





	public function insertFormations(){
		$this->allowTo(['Admin']);
		$login = new AuthentificationModel();
		$FormationsModel = new FormationsModel();
		$errors = array();
		$params = array(); // Les paramètres qu'on envoi a la vue, on utilisera les clés du tableau précédé par un $ pour les utiliser dans la vue
		// Faire vérification des champs ICI
		$maxSize = 3024 * 3000; // 1Ko * 1000 = 1Mo
		$dirUpload = '/assets/img';
		$mimeTypeAllowed = array('image/jpg', 'image/jpeg', 'image/png');

		if(!empty($_POST)){
			// Faire vérification des champs ICI
			if(empty($_POST['alias'])){
				$errors[] = 'l alias est vide';
			}
			if(empty($_POST['niveau'])){
				$errors[] = 'le niveau est vide';
			}
			if(empty($_POST['description'])){
				$errors[] = 'la description est vide';
			}
			if(empty($_POST['section'])){
				$errors[] = 'la section est vide';
			}
			if(empty($_POST['dates'])){
				$errors[] = 'il n\'y a pas de session';
			}
			if(empty($_POST['photo'])){
				$errors[] = 'veuiller entrer une photo';
			}

			// il n'y a pas d'erreurs,  inserer la section a bien rentré en bdd :
			if(count($errors) == 0){
				$FormationsModel->insert([
					'section' 	  	=> $_POST['section'],
					'niveau'		=> $_POST['niveau'],
					'alias' 		=> $_POST['alias'],
					'description' 	=> $_POST['description'],
					'dates'		=> $_POST['dates'],
					'photo' 	    => $_POST['photo'],
				]);

				$params['success'] = 'votre nouvelle formation à bien été rajouté !';
			}
			// sinon on affiche les erreurs:
			else{
				$params['errors'] = $errors;
			}

		}

		$this->show('admin/insertFormations', $params);
	}



	public function insertAteliers(){
		$this->allowTo(['Admin']);
		$login = new AuthentificationModel();
		$AteliersModel = new AteliersModel();
		$errors = array();
		$params = array(); // Les paramètres qu'on envoi a la vue, on utilisera les clés du tableau précédé par un $ pour les utiliser dans la vue
		// Faire vérification des champs ICI
		$maxSize = 3024 * 3000; // 1Ko * 1000 = 1Mo
		$dirUpload = '/assets/img/';
		$mimeTypeAllowed = array('image/jpg', 'image/jpeg', 'image/png');

		if(!empty($_POST)){
			// Faire vérification des champs ICI
			if(empty($_POST['alias'])){
				$errors[] = 'l alias est vide';
			}
			if(empty($_POST['description'])){
				$errors[] = 'la description est vide';
			}
			if(empty($_POST['section'])){
				$errors[] = 'la section est vide';
			}
			if(empty($_POST['dates'])){
				$errors[] = 'il n\'y a pas de session';
			}
			if(empty($_POST['photo'])){
				$errors[] = 'veuiller entrer une photo';
			}

			// il n'y a pas d'erreurs,  inserer la section a bien rentré en bdd :
			if(count($errors) == 0){
				$AteliersModel->insert([
					'section' 	  	=> $_POST['section'],
					'alias' 		=> $_POST['alias'],
					'description' 	=> $_POST['description'],
					'dates'		=> $_POST['dates'],
					'photo' 	    => $_POST['photo'],
				]);

				$params['success'] = 'votre nouvelle atelier à bien été rajouté !';
			}
			// sinon on affiche les erreurs:
			else{
				$params['errors'] = $errors;
			}

		}

		$this->show('admin/insertAteliers', $params);
	}




	////////////////////////////////////////////////////////////
	//Inserer un article

	public function insertActus(){
		$this->allowTo(['Admin']);
		$login = new AuthentificationModel();
		$ActusModel = new ActusModel();
		$errors = array();
		$params = array(); // Les paramètres qu'on envoi a la vue, on utilisera les clés du tableau précédé par un $ pour les utiliser dans la vue
		// Faire vérification des champs ICI find
		$maxSize = 3024 * 3000; // 1Ko * 1000 = 1Mo
		$dirUpload = 'assets/img/';
		$mimeTypeAllowed = array('image/jpg', 'image/jpeg', 'image/png');

		if(!empty($_POST)){
			// Faire vérification des champs ICI

			if(empty($_POST['description'])){
				$errors[] = 'la description est vide';
			}
			if(empty($_POST['titre'])){
				$errors[] = 'le titre est vide';
			}
			if(empty($_POST['photo'])){
				$errors[] = 'veuiller entrer une photo';
			}

			// il n'y a pas d'erreurs,  inserer la section a bien rentré en bdd :
			if(count($errors) == 0){
				$ActusModel->insert([
					'titre' 	  	=> $_POST['titre'],
					'date'				=> date('Y-m-d'),
					'photo' 	    => $_POST['photo'],
					'description' => $_POST['description'],
				]);

				$params['success'] = 'votre nouvel article à bien été rajouté !';
			}
			// sinon on affiche les erreurs:
			else{
				$params['errors'] = $errors;
			}

		}

		$this->show('admin/insertActus', $params);
	}






	public function connect()
	{
		$userModel = new UsersModel();
		$login = new AuthentificationModel();
		$errors = array();
		$params = array(); // Les paramètres qu'on envoi a la vue, on utilisera les clés du tableau précédé par un $ pour les utiliser dans la vue
		if(!empty($_POST)){
			// Faire vérification des champs ICI
			if(empty($_POST['login'])){
				$errors[] = 'Le Login est vide';
			}
			elseif(!filter_var($_POST['login'], FILTER_VALIDATE_EMAIL) != false){
				$errors[] = 'Le Login est invalide';
			}
			if(empty($_POST['pass'])){
				$errors[] = 'Le pass est vide';
			}
			if(count($errors) == 0){
				// il n'y a pas d'erreurs, l'utilisateur a bien rentré un login correct et un pass
				// si ces infos sont valides en BD
				$userId = $login->isValidLoginInfo($_POST['login'], $_POST['pass']);
				if(is_int($userId) && $userId != 0){

					$userDatas = $userModel->find($userId);
					// alors démarrer la session (logUserIn)
					$login->logUserIn($userDatas);
					// et rediriger vers l'accueil
					$params['success'] = 'Bienvenue vous êtes connecté(e) !';
					$this->redirectToRoute('index');
				}
				else {
					$errors[] ='dommage !!!';
				}
			}
		}
		$params['errors'] = $errors;
		$this->show('admin/connect', $params);
	}
	public function deconnect()
	{
		$login = new AuthentificationModel();

		$params = array();
		if (empty($_POST)){
			$vue = true;
		}
		 // Les paramètres qu'on envoi a la vue, on utilisera les clés du tableau précédé par un $ pour les utiliser dans la vue
		if (!empty($_POST)){
			$vue = false;
			$userId = $login->logUserOut();
		}

		$params['vue'] = $vue;
		$this->show('admin/deconnect',$params);
	}
	public function reiniPass()
	{
		$login = new AuthentificationModel();
		$userModel = new UsersModel;
		$errors = array();
		$mail = new PHPMailer;
		$params = array(); // Les paramètres qu'on envoi a la vue, on utilisera les clés du tableau précédé par un $ pour les utiliser dans la vue
		if(!empty($_POST)){
			// Faire vérification des champs ICI
			if(empty($_POST['email'])){
				$errors[] = 'l\'email est vide';
			}
			if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) !== false){
				$errors[] = 'L\'email est invalide';
			}
			// si pas d'erreurs,
			if(count($errors) == 0){
				// on va vérifier qu'il existe un utilisateur avec cet email dans la base
				if($idUser = $userModel->emailExists($_POST['email'])){
					$token = password_hash($_POST['pass'],PASSWORD_DEFAULT);// on génère un 'token', identifiant unique
					$idUser = $userModel->getUserByUsernameOrEmail($_POST['email'])['id']; //chercher id
					$userModel->update([
						"confirmedToken" 		=> $token,
						"dateConfirmedToken" 	=>date('Y-m-d',strtotime('+1 week'))
						], $idUser);	// on stocke le token dans la bdd pour cet utilisateur
					$successUrl = $this->generateUrl('reiniPassTok').'?email='.$_POST['email'].'&token='.$token;// on crée le lien permettant à l'utilisateur de resaisir un
					$successLink = "http://localhost".$successUrl;
					// nouveau mot de passe
					// on envoie le mail avec le lien:
					$app = getApp();



					//$mail->SMTPDebug = 3;             												// Enable verbose debug output
					$mail->setLanguage('fr', '../../vendor/phpmailer/phpmailer/language/');
					$mail->isSMTP();  // Set mailer to use SMTP

					$mail->send() ;
					$mail->Host = $app->getConfig("phpmailer_server");  								// Specify main and backup SMTP servers
					$mail->SMTPAuth = true;                               								// Enable SMTP authentication
					$mail->Username = $app->getConfig("phpmailer_user");                				 // SMTP username
					$mail->Password = $app->getConfig("phpmailer_pass");                           		// SMTP password
					$mail->SMTPSecure = 'tls';                            								// Enable TLS encryption, `ssl` also accepted
					$mail->Port = $app->getConfig('phpmailer_port');                                    // TCP port to connect to

					$mail->setFrom($_POST['email'],'vous même');    	// Add a recipient
					$mail->addAddress($_POST['email']);     //$mail->addAddress($_POST['email']);               // Name is optional
					$mail->addReplyTo('offres@vincentmartinat.com', 'Information');
					/*$mail->addCC('cc@example.com');
					$mail->addBCC('bcc@example.com');

					$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
					$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
						*/
					$mail->isHTML(true);
					$mail->Body = '<a href="'.$successLink.'">Reinitialisez votre mot de passe en cliquant sur cette phrase ce liens est valable une semaine après merci de refaire une demande.</a>';                  	// Set email format to HTML




				} else {
				// si non:
					// message d'erreur: cette adresse mail ne correspond pas à un membre du site
					$errors[] = 'L\'email n\'existe pas';
				}
				// si oui:
					// on génère un 'token', identifiant unique

					// on stocke le token dans la bdd pour cet utilisateur

					// on crée le lien permettant à l'utilisateur de resaisir un nouveau mot de passe
					// ce lien doit contenir le token, c'est ce qui nous permettra de vérifier que l'utilisateur qui saisit le nouveau mot de passe est bien le propriétaire de l'adresse email (qui a cliqué sur le lien)


				if(!$mail->send()) {
						$errors[] = 'L\'email n\'a pas pu être envoyé';
						echo 'Mailer Error: ' . $mail->ErrorInfo;
					} else {
						$params['success'] = 'Youhou, c\'est envoyé!';
					}
			}
		}
		if(count($errors) > 0){
			$params['errors'] = $errors;
		}

		$this->show('admin/reiniPass', $params);
}
	public function reiniPassTok(){
		$login = new AuthentificationModel();
		$userModel = new UsersModel();
		$errors = array();
		$params = array(); // Les paramètres qu'on envoi a la vue, on utilisera les clés du tableau précédé par un $ pour les utiliser dans la vue
		//verifier et recuperer le token et email puis :


			//récuperer les infos du formulaire
				if(!empty($_POST)){
					// Faire vérification des champs ICI
					if (empty($_POST['pass'])) {
						$errors[]='le mot de passe est vide';
					}
					if (empty($_POST['confirm_pass'])) {
						$errors[]='la confirmation du mot de passe est vide';
					}

					//les deux soient identiques
					// mettre à jour le mot de passe
					if(count($errors) == 0){
						// on va vérifier qu'il existe un utilisateur avec cet email dans la base
				        if($idUser = $userModel->emailExists($_GET['email'])){

							$idUser = $userModel->getUserByUsernameOrEmail($_GET['email'])['id']; //chercher id
							$userModel->update([
								"password" => password_hash($_POST['pass'],PASSWORD_DEFAULT)], $idUser);	// Modifie une ligne en fonction d'un identifiant et on stocke le nouveau mot de passe dans la bdd pour cet utilisateur
						}
						else{
							$params['error'] = 'votre mot de passe n\'a pas pu etre changer!!!';
						}

					}
					$params['success'] = 'votre nouveau mot de passe à bien été changé !';
				}

				$this->show('admin/reiniPassTok', $params);
				//$this->redirectToRoute('index');
				var_dump($success);
	}

	public function deleteProfil(){
		$delete = new DeleteAccountModel();
		$params = array();
    	$errors = array();
    	if(!empty($_POST)){
	        if(empty($_POST['email'])){
	  			$errors[] = 'l\'email est vide';
	  		}
	  		if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) !== false){
	          $errors[] = 'L\'email est invalide';
	        }
	        if(empty($_POST['email2'])){
	  			$errors[] = 'l\'email de confirmation est vide';
	  		}
	        if($_POST['email'] != $_POST['email2']){
	        	$errors[] = 'l\'email de confirmation semble incorrecte';
	        }
	  		if(count($errors) == 0){
		        //trouver l'id de l'utilisateur par son adresse mail
	  			$id = $delete->findIdByMail($_POST['email2']);
	  			var_dump($id);
		        if(true){
		            $allinfos = $delete->deleteAll($id['id']);
		            var_dump($allinfos);
		            if($allinfos == true){ 
		            	$params['success'] = 'Le profil à bien été supprimé !';
		        	}else{
		        		$errors[] = 'Le profil n\'a pas été supprimé';
		        	}
		        }else{
		            $errors[] = 'L\'email n\'est pas present dans la base de données, veuillez réessayer.';
		        }
		    }
      	}
        $params['errors'] = $errors;
        $this->show('admin/deleteProfil', $params);
	}
}
