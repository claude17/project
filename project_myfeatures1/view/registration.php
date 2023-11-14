<html>
<head>
    <title>Registration form</title>
</head>
<body>
    <form method="post" action="../controller/registrationCheck.php" enctype="">
        <fieldset>
            <legend><h3>REGISTRATION</h3></legend>
            First Name <br>
            <input type="text" name="firstName" value="" /> <br><br>
            Last Name <br>
            <input type="text" name="lastName" value="" /> <br><br>
            User Name <br>
            <input type="text" name="username" value="" /> <br><br>
            Email <br>
            <input type="email" name="email" value="" /> <br><br>
            Password <br>
            <input type="password" name="password" value="" /> <br><br>
            
                <legend> Gender </legend>
                <input type="radio" name="gender" value="Male" /> Male
                <input type="radio" name="gender" value="Female" /> Female
                <input type="radio" name="gender" value="Other" /> Other
                <br><br>
    
            Phone <br>
            <input type="number" name="phone" value="" /> <br><br>
            <input type="submit" name="submit" value="Sign Up" />
            <input type="reset" name="reset" value="Reset" />
            <p>Already have an acccount? <a href="login.php">Log In</a></p>
        </fieldset>
            
    </form>
</body>
</html>
