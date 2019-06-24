<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>EN</title>
</head>

<body>
<?php
	 
	//---------------------------------------------------------
	// MENU PRINCIPAL
	//---------------------------------------------------------
	 
	define('ACCUEIL', 'home');
	define('PROJETS', 'projects');
	define('ILLUSTRATIONS', 'illustrations');
	define('PRINTS', 'prints');
	define('COMPETENCES', 'skills');
	define('LOISIRS', 'hobbies');
	define('CONTACT', 'contact');
	define('GET_IN_TOUCH', 'get in touch');
	
	//---------------------------------------------------------
	// MENU LANGUE
	//---------------------------------------------------------

	define('LANG', 'EN');
	define('FLECHE_UP', 'Up to page top');

	//---------------------------------------------------------
	// INTRO ACCUEIL
	//---------------------------------------------------------

	define('INTRO', 'Front-End Developer obsessed with clever creative visuals<br>
	Wishing to improve my skills with a<br>');
	define('INTRO_GRAS', 'Master of Web Design');

	//---------------------------------------------------------
	// PROJETS
	//---------------------------------------------------------

	define('PJT_TITLE', '<strong>Few Front and Design projects I worked on</strong>, during my Web Development studies.');
	
	define('ORANGE_H3', 'Mobile e-shop of Orange and Sosh France<br>(2019)');
	define('ORANGE_P', 'Improvement of the color bullets on the phone list and 
	implementation of the delayed display of scrolled pictures, in a worry of web performance and 
	<b>User eXperience</b>, because of total loading time reduced.');
	define('ORANGE_LEG1', 'The app is made with Java and Thymeleaf languages.');
	define('ORANGE_LEG2', "I replaced the previous bullets on these pages, which were images, by a SVG composant. 
	SVG forms are directly drawn by the navigator, so they don't call the server to be displayed.
	This way, the number of the requests is reduced and so the total loading time of the page too.");
	define('ORANGE_LEG3', "Then, I've added a javascript method to lazy load images, in order to avoid 
	loading images which will never be seen by the user. Now, pictures are only loaded if the user
	scroll down, resize or change the orientation (portrait or landscape) of the screen.");
	define('ORANGE_LEG_DEMO', 'Click on the pictures below to see the demo.');

	define('AB_H3', 'Amuse-Bouche<br>(2019)');
	define('AB_P1', "Creation of all the concept and the visual identity of a fictive company of canelés, 
	the Bordeaux's famous speciality, as part of the <b>Ergonomy module</b> 
	of my third year of Web Development studies.");
	define('AB_P2', "From the choice of the company's concept and positioning, to it's name, logo, graphical charter, and website's mock-up.");
	define('AB_REPORT', "Get the report (FR)");
	define('AB_LEG1', 'I choose a concept in which the lab would be placed in Shanghai (China), 
	because they are good clients for French food. I identified the luxury market to sell the canelés 
	of my client and wanted suitable graphical chart and visual identity for the website. Please 
	<a href="files/Amuse-Bouche_report.pdf" target="_blank">read the report</a> to have 
	all the details of the project. ');
	define('AB_LEG2', "Technologies used: Photoshop and Just in Mind.");
	define('AB_LEG3', "You can see below the home page and an exemple of product detail, in desktop and mobile version. 
	Click on the pictures to see full pages.");
	define('AB_LEG4', "And here, the desktop version of the list of the products and the basket.");

	//---------------------------------------------------------
	// Fin
	//---------------------------------------------------------
 	 
?>
</body>
</html>