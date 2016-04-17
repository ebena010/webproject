<!-- ********************************************************************
      Program : delete.php
      Author  : Michael Robinson
      Purpose : Deletes record selected by user
      Updated : March 22, 2016
********************************************************************* -->

<html>

  <body>
  
    <?php
                   
       $record = "RECORD ". $Telephone." DELETED";
         
       $found = $_POST['found']; 
       //echo "delete  found = [" . $found . "]<br>";
        
       // sql to delete a record
       $sql="DELETE FROM customers WHERE Telephone='$Telephone'";
         
       $Telephone=trim($Telephone);
          
       //     if(strlen($Telephone)>0)           
       if (  ( strlen(trim($found)) > 0 ) && ($found == $Telephone) )
       { 
                      
          if (mysqli_query($connection, $sql)) 
          {
             //echo "Record deleted successfully found = {".$found."}";
             $message ="<span style=\"color: red;\">RECORD $found DELETED</span><br\>";
             $found=""; //this clear the flag for record found to be able to modify 
          }         
          else 
          {
             $message = "Error deleting record: " . mysqli_error($connection); 
          }
          
       }   
       else
       {
          $message ="<span style=\"color: red;\">RECORD NOT DELETED<BR>Telephone CAN NOT BE EMPTY</span><br\>";
       }
                        
    ?>
                      
  </body>
                    
</html>

