<!-- ******************************************************************** 
      Program : modify.php                                               
      Author  : Michael Robinson                    
      Purpose : Modifies record requested by user             
      Updated : March 22, 2016
********************************************************************* -->

<html>

  <body>
        
    <?php
        
       $found = $_POST['found']; 
           
       if (  ( strlen(trim($found)) > 0 ) && ($found == $Telephone) )
       {               
                  
          $query = "UPDATE customers 
                    SET FirstName		=  '$FirstName',  
                        LastName		=  '$LastName',
                        Email			=  '$Email',
                        Gender			=  '$Gender',
						Age				=  '$Age',
                        Basic			=  '$Basic',
                        Premium			=  '$Premium',
                        Extended		=  '$Extended',
                        Deluxe			=  '$Deluxe',
                        Comments		=  '$Comments'  
                                 
                   WHERE Telephone = '$Telephone'";
                       
          $sql = mysqli_query( $connection,$query );
                                              
          if ($sql)
          {
             $message ="<span style=\"color: red;\">RECORD $found MODIFIED</span><br\>";
          }   
          else
          {
             //echo "Problem updating record. MySQL Error: " . mysqli_error($connection);
             $message ="<span style=\"color: red;\">PROBLEM UPDATING RECORD</span><br\>";
          }
             
       }   
       else
       {
          $message ="<span style=\"color: red;\">FIND THE RECORD BEFORE MODIFYNG IT</span><br\>";
       }
                               
    ?>
     
  </body>
                
</html>