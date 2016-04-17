<!-- ******************************************************************** 
      Program : find.php                                                           
      Author  : Michael Robinson                                         
      Purpose : Finds and displays record requested by user                  
      Updated : March 22, 2016                                             
********************************************************************* -->
                          
<html>
                     
  <body>                       
                                  
    <?php
           
       $sql="SELECT * FROM customers where Telephone = '$Telephone'";
             
       if ($result=mysqli_query($connection,$sql))
       {
          //printf("Result of mysqli_query(connection,sql) = %d<br>", $result);
          
          // Return the number of rows in result set
          $rowcount=mysqli_num_rows($result);
                   
          //printf("Result set has %d rows.\n",$rowcount);
                        
          while( $row = mysqli_fetch_array( $result ) )
          {
             $Telephone		= $row['Telephone'];	//primary key
             $FirstName		= $row['FirstName'];	//type="text"
             $LastName		= $row['LastName'];		//type="text"
             $Email			= $row['Email'];		//type="text"
             $Gender		= $row['Gender'];		//type="dropdown"
             $Age			= $row['Age'];			//type="radio" 
			 $Basic			= $row['Basic'];		//type="checkbox"
             $Premium		= $row['Premium'];		//type="checkbox" 
             $Extended		= $row['Extended'];		//type="checkbox"
             $Deluxe		= $row['Deluxe'];		//type="checkbox"
             $Comments		= $row['Comments'];		//type="textarea"          
          }

          //printf("\ni am here in find.php\n [%s] [%s]", $Telephone, $FirstName );
          //echo "(".$Telephone." ".$FirstName.")";

          $Telephone=trim($Telephone); //take all front and back spaces out
            
          //if (mysqli_query($connection, $sql)) 
          if ( $rowcount )
          {
             $found = $Telephone;
             $message ="<span style=\"color: red;\">RECORD $found FOUND</span><br\>";
          } 
          else if( strlen($Telephone) ==0 )           
          {
             $message ="<span style=\"color: red;\">RECORD NOT FOUND <br>Telephone CAN NOT BE EMPTY</span><br>";
             //echo "<br>Error: " . $sql . " " . mysqli_error($connection);
                  
             //clear data in variables       
             //$Telephone	= "";
             $FirstName		= "";
             $LastName		= "";
             $Email			= "";
             $Gender		= "";
			 $Age			= "";
             $Basic			= "";
             $Premium		= "";
             $Extended		= "";
             $Deluxe		= "";
             $Comments		= "";            
                      
             $found			= "";  
          }
          else 
          {
             $message ="<span style=\"color: red;\">RECORD $Telephone NOT FOUND</span><br>";
                  
             //clear data in variables       
             //$Telephone	= "";
             $FirstName		= "";
             $LastName		= "";
             $Email			= "";
             $Gender		= "";
			 $Age			= "";
             $Basic			= "";
             $Premium		= "";
             $Extended		= "";
             $Deluxe		= "";
             $Comments		= "";            
                      
             $found			= "";   
          }

             
      }
                 
   ?>
   
  </body>

</html>
