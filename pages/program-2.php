<!-- ***************************************************************************************
  Author     : Edel Benavides
  Course     : WEB-3
  URL        : ocelot.aul.fiu.edu/~ebena010
  Professor  : Michael Robinson 
  Program #  : Program 2
               Create pages using HTML, PHP, and CSS to communicate with controller page

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
		<title>Benavides, Edel - Program 2</title>
		<?php include '../includes/top-header.html'; ?>
		<?php include '../includes/top-menu.html'; ?>
	</head>

	<!--Body-->
	<body>
		<?php include '../includes/background-1.html'; ?>
		
		<?php include '../includes/program-2-info.php'; ?>
			
		<?php include '../includes/bottom-links.html'; ?>
	</body>
</html>