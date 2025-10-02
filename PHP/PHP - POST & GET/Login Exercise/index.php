<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="index.php" method="post">
    <label>Username:</label><br>
    <input type="text" name="user"><br>

    <label>Password:</label><br>
    <input type="password" name="password"><br>

    <button type="submit" value="log in">Login</button>
    </form>

</body>
</html>

<?php
    echo "{$_POST["user"]} <br>";
    echo "{$_POST["password"]} <br>";

    //POST NOT APPENDED TO URL (TRAVELS ENCRYPTED INSIDE HTTPS)
    //MORE SECURE (CAUTION WiTH SNIFFERS)
    //results not cache
    // better to submit secure information
    


    //GET APPENDED TO URL
    //NOT SECURE (SPECIAL CAUTION WiTH SNIFFERS)
    //char limit
?>



