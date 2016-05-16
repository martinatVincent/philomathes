<?php

	$w_routes = array(
		///////////////////////////FRONT/////////////////////////////////////////////////////////////
		['GET', '/index', 'Front#metiers', 'index'],

		['GET', '/conditions', 'Front#conditions', 'conditions'],
		['GET|POST', '/contactadmin', 'Front#contactAdmin', 'contactAdmin'],
		['GET|POST', '/recherche', 'Front#recherche', 'recherche'],


		////////////////////////////PROFIL////////////////////////////////////////////////////////
		['GET', '/profil/profiluser/[:id]', 'Profil#profilUser', 'profiluser'],
		['GET', '/profil/allprofiles', 'Profil#allprofiles', 'allprofiles'],
		['GET', '/profil/allprofiles/ajaxpaginallprofiles', 'Profil#ajaxpaginallprofiles', 'ajaxpaginallprofiles'],
		['GET|POST', '/profil/profiluser/[:id]/suppressiondecompte', 'Profil#deleteaccount', 'deleteaccount'],
		//contacter Profil//
		['GET|POST', '/profil/contact/[:id]', 'profil#contact', 'contact'],

		//inserer un projet//
		['GET|POST', '/profil/insertprojects', 'profil#insertProjects', 'insertProjects'],
		['GET|POST', '/profil/updatesprofil', 'profil#updatesProfil', 'updateProfil'],
		['POST', '/profil/updatephoto', 'profil#updatePhoto', 'updatePhoto'],
		['POST', '/profil/updatephotoproject', 'profil#updatePhotoProjet', 'updatePhotoProjet'],
		['GET|POST', '/profil/portfolio/projectspage/[:id]', 'Profil#projectsPage', 'projectsPage'],
		['GET', '/profil/portfolio/projectspage/[:id]/ajaxpagin', 'Profil#ajaxprojectspagepagin', 'ajaxprojectspagepagin'],

		////////////////////////////ACTUALITES////////////////////////////////////////////////////////
		['GET', '/actus', 'actus#actus', 'actus'],
		['GET', '/actuspage', 'actus#ajaxActus', 'paginationsactus'],
		['GET|POST', '/actus/articleDetails/[:id]', 'actus#articleDetails', 'articleDetails'],

		////////////////////////////METIERS////////////////////////////////////////////////////////
		['GET', '/metiers', 'metiers#metiers', 'metiers'],
		['GET', '/metiers/formationsEtAteliers', 'metiers#formationsEtAteliers', 'formationsEtAteliers'], //page au 2 bouton

		['GET', '/metiers/formations','metiers#formations', 'formations'], //page formations
		['GET', '/metiers/ateliers','metiers#ateliers', 'ateliers'], //page ateliers
		['GET', '/metiers/profilformation/[:id]', 'metiers#profilformation', 'profilformation'], // va chercher par l'id formation le profil d'elle
		['GET', '/metiers/profilatelier/[:id]', 'metiers#profilatelier', 'profilatelier'], // va chercher par l'id atelier le profil d'elle



		///['GET', '/formations','metiers#metiers', 'metiers'],
		['GET', '/atelier', 'atelier#metier', 'atelier'],
		//2 nouvelles routes a rajouter => formations pro et atelier loisirs . 2 nouveau manager appellant les tables correspondantes
		['GET|POST', '/metierspage', 'metiers#ajaxmetiers', 'paginationsmetiers'],
		['GET', '/metiers/[a:section]/profilsall', 'profil#profilsAll', 'profilsall'],
		['GET', '/metiers/[a:section]/profilsall/pagination', 'profil#ajaxprofils', 'paginationprofils'],

		/////////////////////////////ADMIN///////////////////////////////////////////////////////////
		['GET|POST', '/admin/connect', 'admin#connect', 'connect'],
		['GET|POST', '/admin/deconnect', 'admin#deconnect', 'deconnect'],
		['GET|POST', '/admin/reinipass', 'admin#reiniPass', 'reiniPass'],
		['GET|POST', '/admin/reinipasstoken', 'admin#reiniPassTok', 'reiniPassTok'],
    ['GET|POST', '/admin/insertprofil', 'admin#insertProfil', 'insertProfil'],

		['GET', '/admin/insertsection', 'admin#test', 'insertSection'],
		['GET|POST', '/admin/insertformations', 'admin#insertFormations', 'insertFormations'],
		['GET|POST', '/admin/insertateliers', 'admin#insertAteliers', 'insertAteliers'],

		['GET|POST', '/admin/insertmetiers', 'admin#insertMetiers', 'insertMetiers'],

		['GET|POST', '/admin/insertactus', 'admin#insertActus', 'insertActus'],
	);
