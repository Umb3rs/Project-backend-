


<!DOCTYPE html>
    <html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Page de création de compte</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <?php
            require('home_page.php');
                if (isset($_POST['submit']))
                
                {
            
                    $user = $_POST['user'];
                
                
                    $email = $_POST['email'];
                
                
                    $password = $_POST['password'];
                    
                    
                    try
                    {
                        $query = "insert into users (user, email, password) values ('$user', '$email', '$password')";
            
                        $statement = $connection->prepare($query);
                        $statement->execute(array('user' => $user, 'password' => $password, 'email' => $email));
                    }
                  
                };
        ?>

        <header>
            <a href=""> <img src="images/logo.png" alt="Logo du site">
            </a>
        </header> 
        <form action="register.php" method="post">
            <input type="text" class="box-input" name="user" required />
            <label for="email">Email</label>
            <input type="email" name="email" id="" required >
            <label for="mdp">Mot de passe</label>
            <input type="password" name="password" id="" required >
            <input type="submit" name="submit" value="submit" class="box-button" />
        </form>
       
    </body>
    </html>