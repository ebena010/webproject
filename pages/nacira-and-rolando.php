<!-- ***************************************************************************************
  Author     : Edel Benavides
  Course     : WEB-3
  URL        : ocelot.aul.fiu.edu/~ebena010
  Professor  : Michael Robinson 
  Program #  : Program 1
               Creating a website using HTML, tables, paragraphs, breaks, CSS, forms, and PHP

  Due Date   : 02/04/2016 
  Certification: 
  I hereby certify that this work is my own and none of it is the work of any other person. 

  ..........{ your signature }..........

**************************************************************************************** -->



<!DOCTYPE HTML>
<html>
	<!--Top header with menu and icons-->
	<head>
		<link rel="shortcut icon" href="../images/camera-icon.ico">
		<title>Benavides, Edel - Nacira and Rolando Engagement</title>
		<?php include '../includes/top-header.html'; ?>
		<?php include '../includes/top-menu.html'; ?>
	</head>

	<!--Body-->
	<body>
		<?php include '../includes/background-1.html'; ?>
		
		<!--Data passed from URL-->
		<?php 
			$pageName = $_GET['pageName'];
			$clicked = $_GET['clicked'];
			if($clicked == 'image'){
				echo "<h2 align='center' style='color:white'>Page Name: $pageName<h2>";
				echo "<h2 align='center' style='color:white'>Clicked: $clicked<h2>";
			}
			
			else if($clicked == 'text-link'){
				echo "<h2 align='center' style='color:white'>Page Name: $pageName<h2>";
				echo "<h2 align='center' style='color:white'>Clicked: $clicked<h2>";
			}
			
			else if($clicked == 'menu-link'){
				echo "<h2 align='center' style='color:white'>Page Name: $pageName<h2>";
				echo "<h2 align='center' style='color:white'>Clicked: Nacira and Rolando - on $clicked<h2>";
			}
		?>
		
		<hr>
		
		<!--Style for input of form-->
		<style>
			input[type=text]
			{
				padding: 5px 10px; border: 1px solid #cccccc; border-radius: 5px;
			}
			
			input[type=submit]
			{
				background-color: #4caf50; color: white; font-size: 25px; padding: 5px 10px;
				margin: 5px; border: none; border-radius: 5px; cursor: pointer;
			}

			.i_font {color:white; font-family:courier; font-size:25px;}
			input[type=submit]:hover {background-color: #45a049;}
		</style>
		<!--Passing Data Using Form-->
		<div align="center">
			<form action="nacira-and-rolando.php" method="post">
				<font class="i_font">Input <input type="text" name="name"></font>
				<input type="submit" name="submit">
			</form>
			
			<font class="i_font"><?php echo $_POST['name']; ?> </font>
		</div>
		
		<hr>
		
		<?php include '../includes/nacira-and-rolando-portfolio.html'; ?>		
		<?php include '../includes/bottom-links.html'; ?>
	</body>
</html>