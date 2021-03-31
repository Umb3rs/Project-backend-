<?php
//retrieve data to connect to the database
require_once('connection.php');
 
//checks that the user has entered data and presses submit
if(isset($_POST['submit']))
{
    if(isset($_POST['email'],$_POST['password']) && !empty($_POST['email']) && !empty($_POST['password']))
    {
        //initialization
        $email = trim($_POST['email']);
        $password = trim($_POST['password']);
      try
      {
          //Search the data base for the email column
          $select_stmt=$conn->prepare("SELECT email FROM users WHERE email=:email");
          $select_stmt->execute(array(':email'=>$email));
          $row=$select_stmt->fetch(PDO::FETCH_ASSOC);
            
          //if email matches a data in the database, it requests a new email 
          if ($row['email']==$email)
          {
              echo "<script>alert(\"Ce nom d'utilisateur est déjà pris !\")</script>";
          }
          //if email is not recognized by the DB, insert the new user into the DB
          else{
              $insert_stmt=$conn->prepare("INSERT INTO users (email, password) VALUES (:email, :password)");
              if ($insert_stmt->execute(array(
                  ':email' =>$email,
                  ':password' =>$password)
                )){
                echo "<script>alert(\"Vous avez bien été enregistré !\")</script>";  
            }
          }
        }
        catch (PDOException $e) {
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
    <link rel="stylesheet" href="main.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@700&family=Roboto&display=swap" rel="stylesheet">
</head>
<body>
    <!--Header-->
	<header class="header">
        <a href="homepage.php" class="logo">
            <img src="images/logo.svg" alt="Website logo">
            <span>Shortner'Up</span>
        </a>
        <div class="header-buttons">
			<!--Connexion link-->
            <a href="login.php" class="signup-button">Se connecter</a>
			<!--Registrer link-->
            <a href="signup.php" class="signin-button">S'inscrire</a>
        </div>
    </header>
    <div>
    <h2 class="pageTitle">Inscription</h2>
         <div class="form_login">
        <form  class="form_login"action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
            <div class="labelContainer">
                <label>Username Or Email</label>
                <input type="text" name="email" value="" placeholder="Nom d'utilisateur">
            </div>     
            <div class="labelContainer">
                <label>Password</label>
                <input type="password" name="password" class="" value="" placeholder="Mot de passe"> 
            </div>
            <div class="">
                <input class="submit_button" type="submit" name="submit" value="s'inscrire">
                </div>
        </form>
    </div> 
    <!--Footer-->
	<footer class="footer">
        <span>Made with &#x1F90D; by H2G2</span>
        <span>&#x1F98A; Audrey Pont – &#x1F428; Paul Gasselin – &#x1F984; Théo Sciancalepore</span>
    </footer>  
</body>
</html>