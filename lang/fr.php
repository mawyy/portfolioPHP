<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>FR</title>
</head>

<body>
<?php
	 
 	//---------------------------------------------------------
	// MENU PRINCIPAL
	//---------------------------------------------------------
	 
	define('ACCUEIL', 'accueil');
	define('PROJETS', 'projets');
	define('ILLUSTRATIONS', 'illustrations');
	define('PRINTS', 'prints');
	define('COMPETENCES', 'compétences');
	define('LOISIRS', 'loisirs');
	define('CONTACT', 'contact');
	define('GET_IN_TOUCH', 'Faisons connaissance');
	
	//---------------------------------------------------------
	// MENU LANGUE ET FLECHE TOP
	//---------------------------------------------------------

	define('LANG', 'FR');
	define('FLECHE_UP', 'Haut de page');

	//---------------------------------------------------------
	// INTRO ACCUEIL
	//---------------------------------------------------------

	define('INTRO', 'Développeuse Front-End passionnée par les visuels créatifs et innovants.<br>
	Je souhaite améliorer mes compétences avec un ');
	define('INTRO_GRAS', 'Master en Web Design');

	//---------------------------------------------------------
	// PROJETS
	//---------------------------------------------------------

	define('PJT_DESC', "<strong>Quelques projets Front et Design sur lesquels j'ai travaillé</strong>, durant mes études en Développement Web.");
	
	define('ORANGE_H3', 'E-shop mobile Orange et Sosh France<br>(2019)');
	define('ORANGE_P', "Amélioration des pastilles de couleurs sur la liste des téléphones et implémentation de l'affichage différé
	des images déroulées, dans un soucis de performance web et d'
	<b>expérience utilisateur</b>, grâce à la réduction du temps de chargement total");
	define('ORANGE_LEG1', "L'application est réalisée en Java et en Thymeleaf.");
	define('ORANGE_LEG2', "J'ai remplacé les pastilles précédentes, qui étaient des images, par un composant SVG. 
	Les formes SVG sont directement dessinées par le navigateur, alors elles ne font aucun appel au serveur pour s'afficher.
	De cette façon, le nombre de requêtes serveur est largement réduit, et par conséquent le temps de chargement total des pages aussi.");
	define('ORANGE_LEG3', "Ensuite, j'ai ajouté une méthode en javascript pour retarder le chargement des images qui ne sont pas visibles à l'écran.
	Maintenant, les images ne sont chargées que lorsque l'utilisateur les affiche à l'écran et les voit.");
	define('ORANGE_LEG_DEMO', 'Cliquez sur les images ci-dessous pou voir la démo.');

	define('AB_H3', 'Amuse-Bouche<br>(2019)');
	define('AB_P1', "Création de tout le concept et de l'identité visuelle d'une entreprise fictive de canelés, 
	la célèbre spécialité de Bordeaux, dans le cadre du <b>module d'Ergonomie</b> 
	de ma licence professionnelle en développement Web.");
	define('AB_P2', "Du choix du concept et du positionnement de l'entreprise, au choix de son nom, son logo, sa charte graphique et de la réalisation 
	des maquettes de son site web.");
	define('AB_REPORT', "Visualiser le rapport de projet");
	define('AB_LEG1', "J'ai choisi de placer l'entreprise à Shanghai (Chine) étant donné que les chinois sont de bons clients en matière de 
	gastronomie française. J'ai positionné l'entreprise de canelés de mon client dans le marché du luxe et j'ai souhaité une charte graphique et une 
	identité visuelle en adéquation pour son site. Retrouvez tous les détails du projet dans <a href='files/Amuse-Bouche_report.pdf' target='_blank'>mon rapport</a>.");
	define('AB_LEG2', "Technologies utilisées: Photoshop et Just in Mind.");
	define('AB_LEG3', "Vous pouvez retrouver ci-dessous la page d'accueil et un exemple de page produit, en versions bureau et mobile. 
	Cliquez sur les images pour voir l'intégralité des pages.");
	define('AB_LEG4', "Et ici, la version bureau de la liste des produits et du panier d'achat :");

	define('MOVIE_H3', "Catalogue de films<br>(2019)");
	define('MOVIE_P1', "Création d'un catalogue personnel dans lequel répertorier tous vos films préférés et les noter, dans le cadre d'un des 
	<b>modules Web</b> de ma licence professionnelle en développement Web.");
	define('MOVIE_P2', "De la conception et du développement au design graphique.");
	define('MOVIE_LEG1', "Dans cette application, il est possible d'ajouter, éditer des informations et supprimer le film de votre choix. 
	Sur la page d'accueil, la langue, le genre et le résumé du film s'affichent lorsqu'on passe la souris sur le film, comme représenté sur le deuxième film ci-dessous. 
	Il est aussi possible de rechercher un film par titre, genre ou réalisateur. La liste des résultats se met alors à jour à chaque lettre saisie. 
	L'application est réalisée avec les frameworks Vue.js et Vuetify.");
	define('MOVIE_LEG2', "Cliquez sur les images pour voir l'intégralité des pages.");

	define('YUM_H3', "Yummical<br>(2019)");
	define('YUM_P1', "Création d'une application qui permet de mesurer les calories consommées lors des repas, dans le cadre 
	du <b>module PHP</b> de ma licence professionnelle en développement Web.");
	define('YUM_P2', "De la conception et du développement au design graphique.");
	define('YUM_LEG1', "Cette application est réalisée avec les frameworks Laravel et Bootstrap. Pour commencer, une authentification est demandée afin de pouvoir ensuite
	gérer tous les repas en ajoutant les ingrédients, et voir le nombre de calories consommées.");

	//---------------------------------------------------------
	// ILLUS
	//---------------------------------------------------------

	define('ILLU_DESC', "<strong>J'aime dessiner des portraits à partir de photographies, avec de jolis jeux d'ombre.</strong>");

	define('SKTCH_H3', "Croquis");
	define('SKTCH_P1', "Dessins à la main au charbon");
	define('SKTCH_LEG1', "J'ai débuté avec les mangas quand j'étais enfant, et maintenant je continue à dessiner selon mes envies, toujours en autodidacte.
	J'ai toujours été impressionnées par les dessins et peintures réalistiques.");

	define('DML_H3', "Draw my life<br><span class='capitalize'>(Mai 2018)</span>");
	define('DML_P1', "Vidéo réalisée pour me présenter lors de ma session d'évaluation, visant à m'intégrer à un programme de formation pour devenir manager de magasin,
	lorsque je travaillais dans la vente à <i>Pull And Bear Bordeaux</i>.");
	define('DML_P2', "Faite sur le concept d'un <b>Draw my life</b>.");
	define('DML_P3', "Selectionnée <i>Meilleure présentation</i> parmi les autres.");
	define('DML_LEG1', "J'ai réalisé les illustrations avec des feutres effaçables et quelques feuilles de papiers.
	Je me suis filmée moi-même avec ma caméra Canon et j'ai réalisé le montage vidéo avec Sony Vegas.");
	define('DML_VID_ERR', "Désolée votre navigateur ne supporte pas la lecture de la vidéo. 
	<a href='images/gallery/fulls/assessment01.mp4'>Téléchargez-la</a>.");

	//---------------------------------------------------------
	// PRINTS
	//---------------------------------------------------------

	define('PRINT_DESC', "<strong>Projets d'imagerie</strong> réalisés en freelance.");

	define('SOJA_H3', "Packaging d'une poudre de soja<br><span class='capitalize>(Juin 2018)</span>");
	define('SOJA_P1', "Création du packaging d'une poudre de soja instantanée, pour un producteur de soja bio à Antananarivo, Madagascar.");
	define('SOJA_LEG1', "Le client souhaitait un visuel clair, épuré, et monochrome.");

	define('RESTAU_H3', "Fong Mei<br><span class='capitalize'>(Novembre 2018)</span>");
	define('RESTAU_P1', "Création de l'enseigne temporaire du restaurant cantonais <i>Fong Mei</i>, basé à Antananarivo Madagascar.");
	define('RESTAU_LEG1', "Les clients souhaitaient un visuel très simple pour ouvrir rapidement leur restaurant.");
	define('RESTAU_LEG2', "Ils m'ont uniquement fourni les dimensions souhaitées et le nom du restaurant en chinois, en phonétiques et en français 
	sans aucune demande particulière");
	define('RESTAU_LEG3', "Voici d'autres propositions faites :");

	define('BDE_H3', "Affiches<br><span class='capitalize'>(2014-2015)</span>");
	define('BDE_P1', "Affiches de communication réalisées lorsque j'étais membre de l'association étudiante de l'IUT (Bureau des étudiants)
	durant ma deuxième année de DUT Informatique.");
	define('BDE_LEG1', "These posters were made to communicate about the students association's events.");
	define('BDE_LEG2', 'The poster and those flyer (recto-verso) below were realized for my Communication teacher 
	in order to communicate about the "Forum des anciens" event that she has managed for the Institute (IUT) in 2015.');

	//---------------------------------------------------------
	// COMP
	//---------------------------------------------------------

	define('COMP_DESC', '<i class="far fa-file-pdf"></i> Show my resume in 
	<a href="#" target="_blank">FR</a>');

	//---------------------------------------------------------
	// HOBBIES
	//---------------------------------------------------------

	define('CARTE_P1', "Discovering the world...");
	define('CARTE_TXT', "These are all the countries that I have 
		<span class='map-text-visited'>visited</span> or 
		<span class='map-text-lived'>lived in</span>.");
	define('CARTE_BE', "Belgium");
	define('CARTE_CN', "China, Hong Kong, Macau");
	define('CARTE_ES', "Spain");
	define('CARTE_IT', "Italy");
	define('CARTE_P2', "...and immortalizing great moments.");

	//---------------------------------------------------------
	// CONTACT
	//---------------------------------------------------------

	define('CONTACT_P1', "<strong>Say Hello!</strong>");
	define('CONTACT_P2', "I'm always available to collaborate to new projects or to do new works. 
	Drop me a line!");
	define('CONTACT_NAME', "Name");
	define('CONTACT_EMAIL', "Email");
	define('CONTACT_MSG', "Message");
	define('CONTACT_SEND', "Send Message");
	define('CONTACT_P3', "© 2019 All rights reserved. Brands mentionned above are property of their respective owner.");
	
	define('CONTACT_PLACE', "Place");
	define('CONTACT_CURRENT', "Currently in");
	define('CONTACT_RS', "Elsewhere");

	//---------------------------------------------------------
	// Fin
	//---------------------------------------------------------
 	 
?>
</body>
</html>