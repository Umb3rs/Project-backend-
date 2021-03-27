<?php 
    require_once "connection.php";

    $sql = "SELECT id FROM users WHERE username = ?";
                
    $result = mysqli_prepare($connection, $sql);
                    
    mysqli_stmt_bind_param($result, "s", $username);
                    
                
    $username = trim($_POST["username"]) ? $_POST['username'] : Null;
    $password = trim($_POST["password"]) ? $_POST['password']: Null;
                
    if(mysqli_stmt_execute($result))
        {
                
            mysqli_stmt_store_result($result);
                        
        } 

    if(isset($username) && isset($password))
        {
            $sql = "INSERT INTO users (username, password) VALUES (?, ?)";
            
            if($result = mysqli_prepare($connection, $sql))
            {
                mysqli_stmt_bind_param($result, "ss", $username, $password);
                if(mysqli_stmt_execute($result))
                {
                    header("location: login.php");
                }  
            }
        }

?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
    
</head>
<body>
    <div>
        <h2>Sign Up</h2>
        <form action="" method="post">
            <div class="">
                <label>Username</label>
                <input type="text" name="username" value="">
            </div>    
            <div class="">
                <label>Password</label>
                <input type="password" name="password" class="" value="">
            </div>
            <div class="">
                <input type="submit" value="Submit">
            </div>
            <p>Already have an account? <a href="login.php">Login here</a>.</p>
        </form>
    </div>    
</body>
</html>