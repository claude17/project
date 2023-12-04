<html>
    <head>
        <title>Login</title>
    </head>
    <body>
        <form action="../controller/loginCheck.php" method="post">
            <fieldset>
                <legend>LOGIN</legend>
                Email: <br>
                <input type="email" name="email" value=""> <br><br>
                Password: <br>
                <input type="password" name="password" value=""><br><br>
                <input type="submit" name="submit" value="Login">
                <br><br>Click here for <a href="registration.php">registration</a>
            </fieldset>
        </form>
    </body>
</html>