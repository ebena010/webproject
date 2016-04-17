<!-- ***************************************************************************************
  Page Name  : controller3.php
  Author     : Edel Benavides
  URL        : ocelot.aul.fiu.edu/~ebena010
  Course     : WEB-3 CGS 4854 TuTh 7:50PM - 9:05PM
  Program #  : Program 3
  Purpose    : Controller page retrieves all the data passed from pgm3.php

  Due Date   : 03/22/2016 
  Certification: 
  I hereby certify that this work is my own and none of it is the work of any other person. 

  
  ..........{ your signature }..........

**************************************************************************************** -->


<!DOCTYPE HTML>
<html style="color: white">

  <head>
    <title>Benavides, Edel - Controller 3</title>
  </head>
  
 <html>
          
  <body>
      
      
    <?php
                     
       //connecting to mysql 
       //echo "<h3>I am going to connect to mySql";

       //                                server               user      password  database     
       $connection = mysqli_connect("ocelot.aul.fiu.edu","spr16_ebena010","3353750","spr16_ebena010");
       if (mysqli_connect_errno())
       {
          echo "Failed to connect to MySQL: " . mysqli_connect_error();
       }
       else
       {  
          //echo "<br>I have connected to mySql<br>";            
             
          // Change database to another name if needed
             
          $dbName="spr16_ebena010"; 
          $db_selected = mysqli_select_db( $connection, $dbName );
                      
          if (!$db_selected)
          {
             die( $dbName . ' does not exist, can\'t use it ' . mysqli_error());
          }
          else
          {
             //echo "I selected database : " . $db_selected . " " . $dbName . "<br></h3>" ;
                   
             //access to a table                    
             $tableName = "customers";
                      
             $query = mysqli_query( $connection, "SELECT * FROM $tableName" );
                     
             //if table does not exist, create it 
             if(!$query)
             {
                echo "The ".$tableName." does not exists<br>";
                        
                echo "<br>Creating table : ".$tableName."<br>";
                       
                $sql = "CREATE TABLE ".$tableName."(
                        Telephone VARCHAR(20) NOT NULL,
                        PRIMARY KEY(Telephone),
                        FirstName VARCHAR(30),
                        LastName VARCHAR(30),
                        Email VARCHAR(30),
                        Gender VARCHAR(10),
						Age VARCHAR(8),
                        Basic VARCHAR(5), 
                        Premium VARCHAR(7),
                        Extended VARCHAR(8),
                        Deluxe VARCHAR(6),
                        Comments VARCHAR(255)
                        )";
                                
                $result = mysqli_query( $connection, $sql );
                         
                //confirm table creation
                if ($result)
                {
                   echo "table ". $tableName." created<br>";
                }
                else
                {
                   die ("Can\'t create ". $tableName." ". mysqli_error() );
                }
                     
             }//if(!$query) if table does not exist, create it 
                        
          }//end if (!$db_selected) connecting to db
                
       }//end if (mysqli_connect_errno()) connecting to mysql

                    
       //extract the data inputed by the user creating global php fields 
       $Telephone	=	$_POST['Telephone'];
       $FirstName	=	$_POST['FirstName'];
       $LastName	=	$_POST['LastName'];
       $Email		=	$_POST['Email'];
       $Gender		=	$_POST['Gender'];
	   $Age			=	$_POST['Age'];
       $Basic		=	$_POST['Basic'];
       $Premium		=	$_POST['Premium'];
       $Extended	=	$_POST['Extended'];
       $Deluxe		=	$_POST['Deluxe'];
       $Comments	=	$_POST['Comments'];            
                 
       $found		=	$_POST['found']; 
                      
/*      
       //verify that the data entered by the user is being received
       echo $Telephone."<br>"; 
       echo $FirstName."<br>";  
       echo $LastName."<br>";  
       echo $Email."<br>";  
       echo $Age."<br>";  
       echo $Gender."<br>";  
       echo $IT."<br>";  
       echo $CS."<br>";  
       echo $Robotics."<br>";  
       echo $Engineering."<br>";  
       echo $Others."<br>";  
       echo $SpecialNeeds."<br>";  
*/                  
               
                        
       if ( $_POST['Find'] )
       { 
          include('../includes/find.php');
       }
       else if ( $_POST['Save'] )
       { 
          include('../includes/save.php');
       }
       else if ( $_POST['Modify'] )
       {  
          include('../includes/modify.php');
       }
       else if ( $_POST['Delete'] )
       { 
          include('../includes/delete.php');
       }
       else if ( $_POST['Clear'] )
       {
          include('../includes/clear.php');
       }
       else
       { 
          echo "<br><h1> you pressed UNKOWN button</h1>";   
       }

       mysqli_close($connection); 

       include( "pgm3.php" );
        
        
    ?>
                 
  </body>

</html>



</html>
