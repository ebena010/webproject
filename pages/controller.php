<!-- ***************************************************************************************
  Page Name  : controller.php
  Author     : Edel Benavides
  URL        : ocelot.aul.fiu.edu/~ebena010
  Course     : WEB-3 CGS 4854 TuTh 7:50PM - 9:05PM
  Program #  : Program 2
  Purpose    : Controller page retrieves all the data passed from pgm2.php

  Due Date   : 02/18/2016 
  Certification: 
  I hereby certify that this work is my own and none of it is the work of any other person. 

  
  ..........{ your signature }..........

**************************************************************************************** -->

<?php session_start(); ?>

<!DOCTYPE HTML>
<html>
	<!---Top header with menu and icons-->
	<head>
		<link rel="shortcut icon" href="../images/camera-icon.ico">
		<title>Benavides, Edel - Controller</title>
		<?php include '../includes/top-header.html'; ?>
		<?php include '../includes/top-menu.html'; ?>
	</head>

	<!--Body-->
	<body>
		<?php include '../includes/background-1.html'; ?>
		
		<?php
			$firstName = $_POST['firstName'];
			$lastName = $_POST['lastName'];
			$phone = $_POST['phone'];
			$email = $_POST['email'];
			$gender = $_POST['gender'];
			$age = $_POST['age'];
			$basic = $_POST['basic'];
			$extended = $_POST['extended'];
			$premium = $_POST['premium'];
			$deluxe = $_POST['deluxe'];
			$comments = $_POST['comments'];
			$buttonClicked;
			$message;
			$_SESSION["message2"];
		?>
		
		<style>
			.box
			{
				border-radius: 10px;
				background: rgba(255,255,255,0.10); /*white*/
				padding: 10px; color:white;
				width: 800px;
			}
		</style>
		
		<div width="950px" align="center">
			<font style="color:white; font-family:courier; font-size:25px">
			
			<!--Find Button-->
				<?php
					if($_POST['findButton']){
						$buttonClicked = $_POST['findButton'];
						$message = "This is the controller page. <b>FIND</b> was pressed.";
						$_SESSION["message2"] = "You previously pressed the <b>$buttonClicked</b> button.";
					}
				?>
				
				<!--Save Button-->
				<?php
					if($_POST['saveButton']){
						$buttonClicked = $_POST['saveButton'];
						$message = "This is the controller page. <b>SAVE</b> was pressed.";
						$_SESSION["message2"] = "You previously pressed the <b>$buttonClicked</b> button.";
					}
				?>
				
				<!--Modify Button-->
				<?php
					if($_POST['modifyButton']){
						$buttonClicked = $_POST['modifyButton'];
						$message = "This is the controller page. <b>MODIFY</b> was pressed.";
						$_SESSION["message2"] = "You previously pressed the <b>$buttonClicked</b> button.";
					}
				?>
				
				<!--Delete Button-->
				<?php
					if($_POST['deleteButton']){
						$buttonClicked = $_POST['deleteButton'];
						$message = "This is the controller page. <b>DELETE</b> was pressed.";
						$_SESSION["message2"] = "You previously pressed the <b>$buttonClicked</b> button.";
					}
				?>
				
				<!--Clear Button-->
				<?php
					if($_POST['clearButton']){
						$buttonClicked = $_POST['clearButton'];
						$message = "This is the controller page. <b>CLEAR</b> was pressed.";
						$_SESSION["message2"] = "You previously pressed the <b>$buttonClicked</b> button.";
					}
				?>
				
				<div class="box">
					<font style="font-size:40px">Controller Page</font>
					<hr>
					<table style="text-align:left">
						<!--Row 1-->
						<tr>
							<td width="250px">First Name:</td>
							<td><?php echo $firstName; ?><br></td>
						</tr>
						
						<!--Row 2-->
						<tr>
							<td width="250px">Last Name:</td>
							<td><?php echo $lastName; ?><br></td>
						</tr>
						
						<!--Row 3-->
						<tr>
							<td width="250px">&#9742 Telephone:</td>
							<td><?php echo $phone; ?><br></td>
						</tr>
						
						<!--Row 4-->
						<tr>
							<td width="250px">&#9993 Email:</td>
							<td><?php echo $email; ?><br></td>
						</tr>
						
						<!--Row 5-->
						<tr>
							<td width="250px">Gender:</td>
							<td><?php echo $gender; ?><br></td>
						</tr>
						
						<!--Row 6-->
						<tr>
							<td width="250px">Age:</td>
							<td><?php echo $age; ?></td>
						</tr>
						
						<!--Row 7-->
						<tr>
							<td width="250px">Package:</td>
							<td><?php echo $basic; ?> <?php echo $extended; ?> 
								<?php echo $premium; ?> <?php echo $deluxe; ?>
							</td>
						</tr>
						
						<!--Row 8-->
						<tr>
							<td width="250px">Comments:</td>
							<td><?php echo $comments; ?><br></td>
						</tr>
					</table>
					
					<!--Echo in the controller which button that was pressed-->
					<br>
					<?php echo $message ?>
					<br>
				</div>
				
			</font>
		</div>
		
		<?php include '../includes/bottom-links.html'; ?>
	</body>
	
</html>