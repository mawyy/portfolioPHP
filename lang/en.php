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

	define('PJT_DESC', '<strong>Few Front and Design projects I worked on</strong>, during my Web Development studies.');
	
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
	all the details of the project.');
	define('AB_LEG2', "Technologies used: Photoshop and Just in Mind.");
	define('AB_LEG3', "You can see below the home page and an exemple of product detail, in desktop and mobile version. 
	Click on the pictures to see full pages.");
	define('AB_LEG4', "And here, the desktop version of the list of the products and the basket:");

	define('MOVIE_H3', "Movie catalog app<br>(2019)");
	define('MOVIE_P1', "Creation of a personal catalog in which you can store all your favourite movies and give them a mark,
	as part of a <b>Web module</b> of my third year of Web Development studies.");
	define('MOVIE_P2', "From the conception and development to the graphical design.");
	define('MOVIE_LEG1', "In this movie app, you can simply add, edit informations and delete a movie of your choice. 
	On the home page, the language, genre and synopsis of the movie appear when the mouse hover on the movie,
	as you can see on the second movie below. You can search a movie too, by title, genre or director name. The list
	of search results is updated every letter written. The app is made with the frameworks Vue.js and Vuetify.");
	define('MOVIE_LEG2', "Click on the pictures to see full pages.");

	define('YUM_H3', "Yummical app<br>(2019)");
	define('YUM_P1', "Creation of an app to mesure the calories consumed in your daily meals,
	as part of the <b>PHP module</b> of my third year of Web Development studies.");
	define('YUM_P2', "From the conception and development to the graphical design.");
	define('YUM_LEG1', "This app is made with the frameworks Laravel and Bootstrap. You have to log in first, and then 
	you are allowed to manage all your meals by adding the ingredients and see how much calories you have eaten.");

	//---------------------------------------------------------
	// ILLUS
	//---------------------------------------------------------

	define('ILLU_DESC', "<strong>I like drawing portraits from real pictures with some shadow games.</strong>");

	define('SKTCH_H3', "Sketches");
	define('SKTCH_P1', "Charcoal handrawings");
	define('SKTCH_LEG1', "I began with mangas when I was a child, and now I continue to draw by feeling, still in self-taught. I am impressed by
	realistic drawings and paintings.");

	define('DML_H3', "Draw my life<br><span class='capitalize'>(May 2018)</span>");
	define('DML_P1', "Video made to introduce myself during my assessment session,
	in order to integrate a formation program aiming to become a shop manager, 
	when I worked in sales at <i>Pull And Bear Bordeaux</i>.");
	define('DML_P2', "Made on the concept of a <b>Draw my life</b>.");
	define('DML_P3', "Selected <i>Best Presentation</i> among all.");
	define('DML_LEG1', "I've realized the illustrations with erasable felts and some papers.
	I filmed myself drawing with my Canon camera and I made the video editing
	with Sony Vegas.");
	define('DML_VID_ERR', "Sorry, your browser doesn't support embedded videos. 
	<a href='images/gallery/fulls/assessment01.mp4'>Download it</a>.");

	//---------------------------------------------------------
	// PRINTS
	//---------------------------------------------------------

	define('PRINT_DESC', "<strong>Print projects</strong> made in freelance.");

	define('SOJA_H3', "Packaging of Soya Powder<br><span class='capitalize>(June 2018)</span>");
	define('SOJA_P1', "Creation of a Soya Powder product's packaging, for an organic soya producer in Antananarivo, Madagascar.");
	define('SOJA_LEG1', "The client wanted something clean, streamlined and monochrome.");

	define('RESTAU_H3', "Fong Mei<br><span class='capitalize'>(November 2018)</span>");
	define('RESTAU_P1', "Creation of the temporary visual sign of <i>Fong Mei</i> cantonese restaurant,	based in Antananarivo Madagascar.");
	define('RESTAU_LEG1', "The client wanted something very simple to open their restaurant quickly.");
	define('RESTAU_LEG2', "They only gave me the dimensions of the final sign and the name of the restaurant in different languages
	without any particular demand.");
	define('RESTAU_LEG3', "These are other propositions made:");

	define('BDE_H3', "Posters<br><span class='capitalize'>(2014-2015)</span>");
	define('BDE_P1', "Communication posters made when I was a member of the students' association (Bureau des étudiants)
	during my second year in Computing Science.");
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