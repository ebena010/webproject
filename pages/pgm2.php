<!-- ***************************************************************************************
  Page Name  : pgm2.php
  Author     : Edel Benavides
  URL        : ocelot.aul.fiu.edu/~ebena010
  Course     : WEB-3 CGS 4854 TuTh 7:50PM - 9:05PM
  Program #  : Program 2
  Purpose    : Main page that shows the form and information to the user.

  Due Date   : 02/18/2016 
  Certification: 
  I hereby certify that this work is my own and none of it is the work of any other person. 

  
  ..........{ your signature }..........

**************************************************************************************** -->

<?php session_start(); ?>

<!DOCTYPE HTML>
<html>
	<!--Top header with menu and icons-->
	<head>
		<link rel="shortcut icon" href="../images/camera-icon.ico">
		<title>Benavides, Edel - pgm 2</title>
		<?php include '../includes/top-header.html'; ?>
		<?php include '../includes/top-menu.html'; ?>
	</head>

	<!--Body-->
	<body>
		<?php include '../includes/background-1.html'; ?>
		
		<?php include '../includes/pgm2-info.html'; ?>
		
		<?php include '../includes/top-menu.html'; ?>
		<?php include '../includes/bottom-links.html'; ?>
	</body>
</html>

<?php session_destroy(); ?>