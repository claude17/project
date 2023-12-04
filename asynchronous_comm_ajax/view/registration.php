<html>
<head>
    <title>Registration</title>
    <script src="../js/script.js"></script>
</head>
<body>
    <form method="post" action="../controller/registrationCheck.php" enctype="">
        <fieldset>
            <legend><h3>Registration</h3></legend>
            Name <br>
            <input type="text" name="name" value="" /> <br><br>
            Phone no <br>
            <input type="number" name="phone" value="" /> <br><br>
            Email ID <br>
            <input type="email" id="email" name="email" value="" onblur="ajax()"/> <span id="output"></span><br><br>
            Password <br>
            <input type="password" name="password" value="" /> <br><br>
            Confirm password <br>
            <input type="password" name="confirmPassword" value="" /> <br><br>
            
            <input type="submit" name="submit" value="Register" />
            <input type="reset" name="reset" value="Reset" /> <br><br>
            Already  have an account?<a href="login.php">Login</a>
        </fieldset>
    </form>
</body>
</html>