<?php session_start();?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Register</h1>
    <form action="index.php" method="post">
        <label >Username</label> <br>
        <input type="text" name="user"><br>

        <label>Password</label><br>
        <input type="password" name="password"><br><br>

        <button type="submit" name="register">Register</button>
   
</form>

</body>
</html>

<?php 

    if(isset($_POST["register"])){ // Verify is button clicked
        $username = $_POST["user"];
        $password = $_POST["password"];
        $userexists = false;
        $file = "users.txt";

        $users = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

        foreach ($users as $user){
            list($storeduser, $storedpassword) = explode(":", $user);

            if ($username === $storeduser){
                $userexists = true;
                break;
            } 
        }
        
            if ($userexists){
                echo"<br><br>User already registered!";
            } else {
                file_put_contents($file, "$username:$password\n", FILE_APPEND);
                echo "<br><br>You have been sucessfuly registered!";
            }

        
        

    }

?>

<body>

    <hr>
    <h1>Login</h1>
    <form action="index.php" method="post">
            <label >Username</label> <br>
            <input type="text" name="user"><br>

            <label>Password</label><br>
            <input type="password" name="password"><br><br>

            <button type="submit" name="login">Login</button>
</body>

<?php 

    if(isset($_POST["login"])){ // Verify is button clicked
        $username = $_POST["user"];
        $password = $_POST["password"];

        $file = "users.txt";

        $users = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

        foreach ($users as $user){
            list($storeduser, $storedpassword) = explode(":", $user);

            if($username === $storeduser && $password === $storedpassword){
                $_SESSION["user"] = $username;
                echo "<br><br>Login succesful! Welcome $storeduser!";
                return;
            }
                 
        }
        echo"<br><br>Invalid username or password!";
    }

?>

