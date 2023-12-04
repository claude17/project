<?php
    include_once('../controller/sessionCheck.php');
    $name=$_SESSION['user']['name'];
    $phone=$_SESSION['user']['phone'];
    $email=$_SESSION['user']['email'];
    
?>
<html>
    <head>
        <title>Home page</title>
    </head>
    <body>
        <fieldset>
            <h3>Welcome to Home Page</h3>
            <fieldset>
                <h3>Your Information</h3>
                <b>Name:   <?php echo $name; ?> <br>
                Phone:  <?php echo $phone; ?><br>
                Email ID:   <?php echo $email; ?></b> <br>
            </fieldset>
            <a href="../controller/logout.php">Logout</a>
        </fieldset>
    </body>
</html>