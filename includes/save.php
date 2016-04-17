<!-- ******************************************************************** 
      Program : save.php                                                   
      Author  : Michael Robinson                                 
      Purpose : Saves record requested by user                          
      Updated : March 22, 2016
********************************************************************* -->  

<html>
    
  <body>
     
    <?php                 
                
       $Telephone=trim($Telephone);
       if(strlen($Telephone)>0)           
       {   
          $sql="INSERT INTO customers (
                  Telephone,
                  FirstName,
                  LastName,
                  Email,
                  Gender,
				  Age,
                  Basic,
                  Premium,
                  Extended,
                  Deluxe,
                  Comments
               )
               VALUES
               (            
                  '$Telephone',
                  '$FirstName',
                  '$LastName',
                  '$Email',
                  '$Gender',
				  '$Age',
                  '$Basic',
                  '$Premium',
                  '$Extended',
                  '$Deluxe',
                  '$Comments'                     
               )";
                
                  
          if (mysqli_query($connection, $sql)) 
          {
             //echo "<br>New record created successfully";
             $message ="<span style=\"color: red;\">RECORD $found ADDED</span><br\>";
          } 
          else
          {
             //echo "<br>Error: " . $sql . "<br>" . mysqli_error($connection);
             $message ="<span style=\"color: red;\">RECORD $found EXISTS NOT ADDED</span><br\>";
          }
           
       }//end if(strlen($Telephone)>0)                      
       else
       {
          $message ="<span style=\"color: red;\">RECORD NOT ADDED<BR>Telephone CAN NOT BE EMPTY</span><br\>";
       } 
             
    ?>
         
  </body>

</html>