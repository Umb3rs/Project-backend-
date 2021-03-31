<?php

require_once('connection.php');

session_start();

if(isset($_POST["submit"]))  
    { 

    if(isset($_POST['email'],$_POST['password']) && !empty($_POST['email']) && !empty($_POST['password']))
    {
        $email = trim($_POST['email']);
        $password = trim($_POST['password']);
        try{

            $stmt=$conn->prepare("SELECT email, password FROM users WHERE email=:email AND password=:password");
            $stmt->bindParam(":email", $email);
            $stmt->bindParam(":password", $password);
            $stmt->execute();

            while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
                $resultEmail = $row['email'];
                $resultPassword = $row['password'];

                if ($email == $resultEmail && $password == $resultPassword)
                {    
                    $stmt=$conn->prepare("SELECT userID FROM users where email =:email");
                    $stmt->bindParam(":email", $email);
                    $stmt->execute();
                    $userID = $stmt->fetch(PDO::FETCH_ASSOC);
                    setcookie('userID', $userID["userID"]);

                    echo 'bienvenue';
                    header("location: index.php");
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
    <link rel="stylesheet" href="../main.css">
    <title>Login page</title>
    
</head>
<body>
    <!--Header-->
	<header class="header">
        <a href="#" class="logo">
            <img src="../../images/logo.svg" alt="Website logo">
            <span>Shortner'Up</span>
        </a>
        <div class="header-buttons">
			<!--Connexion link-->
            <a href="#Se connecter" class="signup-button">Se connecter</a>
			<!--Registrer link-->
            <a href="#Inscription" class="signin-button">S'inscrire</a>
        </div>
    </header>
    <div>
        <h2>Connexion</h2>
        <form action="" method="post">
            <div class="">
                <label>Username</label>
                <input type="text" name="email" value="">
            </div>    
            <div class="">
                <label>Password</label>
                <input type="password" name="password" class="" value="">
            </div>
            <div class="">
                <input type="submit" name='submit' value="Submit">
            </div>
            <p>Vous n'avez pas encore de compte <a href="signup.php">Inscrit toi ici</a>.</p>
        </form>
    </div>    
</body>
</html>