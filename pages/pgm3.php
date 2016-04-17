<!-- ***************************************************************************************
  Page Name  : pgm3.php
  Author     : Edel Benavides
  URL        : ocelot.aul.fiu.edu/~ebena010
  Course     : WEB-3 CGS 4854 TuTh 7:50PM - 9:05PM
  Program #  : Program 3
  Purpose    : Main page that shows the form and information to the user.

  Due Date   : 03/22/2016 
  Certification: 
  I hereby certify that this work is my own and none of it is the work of any other person. 

  
  ..........{ your signature }..........

**************************************************************************************** -->

<!DOCTYPE HTML>
<html>
	<!---HEAD - Top header with menu, icons, and background-->
	<head>
		<link rel="shortcut icon" href="../images/camera-icon.ico">
		<title>Benavides, Edel - Pgm 3</title>
		<?php include '../includes/top-header.html'; ?>
		<?php include '../includes/top-menu.html'; ?>
		<?php include '../includes/background-1.html'; ?>
	</head>
</html>


<!--Style for FORM-->
<style>
	#t_input {padding: 5px; width: 800px;}
	#td_left {width: 250px; text-align: left;}
	#td_right {width: 450px; text-align: left;}

	input[type=text]
	{
		width: 400px; padding: 10px;
		border: 1px solid #cccccc;
		border-radius: 5px; font-size:20px;
	}
	
	select
	{
		width: 200px; padding: 10px;
		border: 1px solid #cccccc;
		border-radius: 5px; font-size:20px;
	}

	input[type=radio], input[type=checkbox]
	{
		width: 30px; height: 20px; cursor: pointer;
	}
	
	input[type=submit], input[type=reset]
	{
		background-color: #4caf50;
		color: white; font-size: 25px;
		padding: 10px 20px;	margin: 10px;
		border: none; border-radius: 5px;
		cursor: pointer; width: 120px;
	}

	input[type=submit]:hover {background-color: #45a049;}
	input[type=reset]:hover {background-color: #45a049;}
	
	.c_font{color:white; font-family:courier; font-size: 25px;}
	
	.box
	{
		border-radius: 10px;
		background: rgba(255,255,255,0.10); /*white*/
		padding: 10px; color:white;
		width: 800px;
	}
	
	.txt_area {font-size:20px;}
</style>
		


<html style="color:white">
          
   <body style="margin: 0px; height: 100px;">

   <?php 
        
      if( strlen(trim($found)) > 0 )
      {  
         //echo "<br>Leave it alone  it means that find.php was already executed  Found = [" . $found . "]";
         //leave it alone it means that find.php was already executed 
      }
      else 
      {
         $found = ""; //set the value of $found to empty
      }

   ?>


		<!--FORM-->
		<br>
		<div align="center">
			<form action="ControllerPgm3.php" method="post" class="box">
				<font class="c_font">
				
					<font style="font-size:30px">Please Input Your Information</font>
					<br>
				
					<hr>
					
					<!--Four Text Input-->
					<table id="t_input">
					
						<!--Row 1-->
						<tr>
							<!--Left Column-->
							<td id="td_left">
								<table><tr><td>&#9742 Telephone</td></tr></table>
							</td>
							
							<!--Right Column-->
							<td id="td_right">
								<input type="text" name="Telephone" value="<?php echo $Telephone ?>">
							</td>
						</tr>
					
						<!--Row 2-->
						<tr>
							<!--Left Column-->
							<td id="td_left">
								<table><tr><td>First Name</td></tr></table>
							</td>
							
							<!--Right Column-->
							<td id="td_right">
								<input type="text" name="FirstName" value="<?php echo $FirstName ?>">
							</td>
						</tr>

						<!--Row 3-->
						<tr>
							<!--Left Column-->
							<td id="td_left">
								<table><tr><td>Last Name</td></tr></table>
							</td>
							
							<!--Right Column-->
							<td id="td_right">
								<input type="text" name="LastName" value="<?php echo $LastName ?>">
							</td>
						</tr>
						
						<!--Row 4-->
						<tr>
							<!--Left Column-->
							<td id="td_left">
								<table><tr><td>&#9993 Email</td></tr></table>
							</td>
							
							<!--Right Column-->
							<td id="td_right">
								<input type="text" name="Email" value="<?php echo $Email ?>">
							</td>
						</tr>					
					</table>
					
					
					<!--Gender DropDown Menu-->
					<br>
					<table id="t_input">
						<tr>
							<!--Left Column-->
							<td id="td_left">
								Gender 
							</td>
							
							<!--Right Column-->
							<td id="td_right">
								<select name="Gender" size="1">
										<option selected value="" <?php if ($Gender == "") echo selected ?> >Select Gender</option>
										<option value="Male" <?php if ($Gender == "Male") echo selected ?> >Male</option>
										<option value="Female" <?php if ($Gender == "Female") echo selected ?> >Female</option>
								</select>
							</td>
						</tr>
					</table>
					
					
					<!--Age Radio Buttons-->
					<br>
					<table id="t_input">
						<!--Row 1-->
						<tr>
							<td id="td_left">Age</td>
							<td width="155px"><input type="radio" <?php if ($Age == "Under 20") echo "checked"; ?>  name="Age" value="Under 20">Under 20</td>
							<td width="160px"><input type="radio" <?php if ($Age == "20-30") echo "checked"; ?> name="Age" value="20-30">20-30</td>
							<td width="160px"><input type="radio" <?php if ($Age == "31-40") echo "checked"; ?> name="Age" value="31-40">31-40</td>
						</tr>
						
						<!--Row 2-->
						<tr>
							<td id="td_left"></td>
							<td width="155px"><input type="radio" <?php if ($Age == "41-50") echo "checked"; ?> name="Age" value="41-50">41-50</td>
							<td width="160px"><input type="radio" <?php if ($Age == "51-60") echo "checked"; ?> name="Age" value="51-60">51-60</td>
							<td width="160px"><input type="radio" <?php if ($Age == "Above-60") echo "checked"; ?> name="Age" value="Above-60">Above 60</td>
						</tr>
					</table>
					
					
					<!--Four Checkbox-->
					<br>
					<table id="t_input">
						<!--Row 1-->
						<tr>
							<td id="td_left">Package</td>
							<td width="235px"><input type="checkbox" name="Basic"  <?php if ($Basic == "Basic") echo checked;?> value="Basic"> Basic</td>
							<td width="240px"><input type="checkbox" name="Premium" <?php if ($Premium == "Premium") echo checked;?> value="Premium"> Premium</td>
						</tr>
						
						<!--Row 2-->
						<tr>
							<td id="td_left"></td>
							<td width="235px"><input type="checkbox" name="Extended" <?php if ($Extended == "Extended") echo checked;?> value="Extended"> Extended</td>
							<td width="240px"><input type="checkbox" name="Deluxe" <?php if ($Deluxe == "Deluxe") echo checked;?> value="Deluxe"> Deluxe</td>
						</tr>
					</table>
					
					<!--TextArea for Comments-->
					<br>
					<table id="t_input">
						<tr>
							<!--Left Column-->
							<td id="td_left">
								Comments
							</td>
							
							<!--Right Column-->
							<td id="td_right">
								<textarea name="Comments" class="txt_area" rows="5" cols="35"> <?php echo $Comments; ?> </textarea>
							</td>
						</tr>
					</table>
					
					<br>
					<font style="font-size:30px"><?php echo $message ?></font>
					
					
					<!--Buttons-->
					<br><br>			
					<table width="700px" style="text-align:center">
						<tr>
							<td><input type="submit" value="Find" name="Find"></td>
							<td><input type="submit" value="Save" name="Save"></td>
							<td><input type="submit" value="Modify" name="Modify"></td>
							<td><input type="submit" value="Delete" name="Delete"></td>
							<td><input type="submit" value="Clear" name="Clear"></td>
							<td><input type="hidden" name="found" value="<?php echo $found ?>" ></td>
						</tr>
					</table>
				</font>
			</form>
			</br>
		</div>
		<!--END OF FORM-->
 
   <br>
   <?php include '../includes/top-menu.html'; ?>
   <br>
   
   </body>
   
</html>


</html>
