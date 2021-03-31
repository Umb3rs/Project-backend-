<?php
//retrieve data to connect to the database
require_once('connection.php');

//checks that the user has entered data and presses submit
if(isset($_POST["submit"]))  
    { 

    if(isset($_POST['email'],$_POST['password']) && !empty($_POST['email']) && !empty($_POST['password']))
    {
        //initialization
        $email = trim($_POST['email']);
        $password = trim($_POST['password']);
        try{
            //select the email and the corresponding password
            $stmt=$conn->prepare("SELECT email, password FROM users WHERE email=:email AND password=:password");
            //bind data to variables
            $stmt->bindParam(":email", $email);
            $stmt->bindParam(":password", $password);
            $stmt->execute();

            //Creation of a table to output the datas
            while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
                $resultEmail = $row['email'];
                $resultPassword = $row['password'];

                //verification that the variables match
                if ($email == $resultEmail && $password == $resultPassword)
                {    
                    $stmt=$conn->prepare("SELECT userID FROM users where email =:email");
                    $stmt->bindParam(":email", $email);
                    $stmt->execute();
                    $userID = $stmt->fetch(PDO::FETCH_ASSOC);
                    setcookie('userID', $userID["userID"]);
                    //echo 'bienvenue';
                    header("location: account.php");
                }
            }
            echo 'Login incorrect';
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
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="main.css">
    <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@700&family=Roboto&display=swap" rel="stylesheet">
    <title>Login page</title>
    
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
    <h1 class="pageTitle">Connexion</h1>
    <div class="form_login">
        
        <form class="form_login"action="" method="post">
            <div class="labelContainer">
                <label>Username Or Email</label>
                <input type="text" name="email" placeholder="Nom d'utilisateur">
            </div>    
            <div class="labelContainer">
                <label>Password</label>
                <input type="password" name="password" placeholder="Mot de passe">
            </div>
            <div>
                <input type="submit" name='submit' value="Se connecter">
            </div>
            <div class="header-buttons">
                <a href="signup.php" class=" signin-button">Inscris-toi ici</a>
            </div>
             
        </form>
    </div>    
</body>
</html>