<?php

require_once('connection.php');
 
if(isset($_POST['submit']))
{
    if(isset($_POST['email'],$_POST['password']) && !empty($_POST['email']) && !empty($_POST['password']))
    {
        $email = trim($_POST['email']);
        $password = trim($_POST['password']);

      try
      {
          $select_stmt=$conn->prepare("SELECT email FROM users WHERE email=:email");
          $select_stmt->execute(array(':email'=>$email));
          $row=$select_stmt->fetch(PDO::FETCH_ASSOC);
            
          if ($row['email'==$email])
          {
              echo "désolé cet email est déjà utilisé";
          }
          else{
              $insert_stmt=$conn->prepare("INSERT INTO users (email,password) VALUES (:email, :password)");
              if ($insert_stmt->execute(array(
                  ':email' =>$email,
                  ':password' =>$password,
              ))){
                 echo "Vous avez bien été enregisté";
                
            }
          }
        }
        catch (PDOException $e ) {
            echo $e->getMessage();
          }
        }
    }
                   
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/header.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@700&family=Roboto&display=swap" rel="stylesheet">
</head>
<body>
        <?php include 'header.php' ?>
    <div>
        <h2>Inscription</h2>
        <form  class="container_form"action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
            <div class="">
                <label>Email</label>
                <input type="text" name="email" value="email">
            </div>     
            <div class="">
                <label>Password</label>
                <input type="password" name="password" class="" value="">
            </div>
            <div class="">
                <input type="submit" name="submit" value="submit">
            </div>
            <p>Already have an account? <a href="login.php">Login here</a>.</p>
        </form>
    </div>    
</body>
</html>