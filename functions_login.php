

<?php
          
        
                
        
            
                        
                    
      $query  = "Insert INTO user (user,email,password) VALUES (?,?,?)";
      $stmt = mysqli_stmt_init($connection);
      if (!mysqli_stmt_prepare($stmt, $query)) 
      {
      header("location: signup.php?error=stmtfailed");
      exit();
      }
      mysqli_stmt_execute($stmt);
      mysqli_stmt_close($stmt);
      header("location: signup.php?error=none");
      $result = mysqli_stmt_get_result() ;

      if ($row = mysqli_fetch_assoc($result))
      {
        return $row;
      }
      else {
      $info = false;
      return $info;
      }
      mysqli_stmt_close($stmt);
;
       

  