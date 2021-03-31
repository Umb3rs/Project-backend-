<?php

require_once('connection.php');

if(isset($_POST["submit"]))  
    { 

    if(isset($_POST['email'],$_POST['password']) && !empty($_POST['email']) && !empty($_POST['password']))
    {
        $email = trim($_POST['email']);
        $password = trim($_POST['password']);
        try{

            $select_stmt=$conn->prepare("SELECT email, password FROM users WHERE email=:email AND password=:password");
            $select_stmt->bindParam(":email", $email);
            $select_stmt->bindParam(":password", $password);
            $select_stmt->execute();

            while($row=$select_stmt->fetch(PDO::FETCH_ASSOC)){
                $resultemail = $row['email'];
                $resultpassword = $row['password'];
            }

            if ($email == $resultemail && $password == $resultpassword)
            {
                
                echo 'bienvenue';
                header("location:accueil_login.php");
            } 
            else{
                
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
    <title>Login page</title>
    
</head>
<body>
    <div>
        <?php include 'header.php' ?>

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