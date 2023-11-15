<?php
    require_once('userModel.php');
    $username=$_POST['nafisusername'];
    $password=$_POST['nafispassword'];

    // echo "your username is ", $nafisU,"\n";
    // echo "your password is ", $nafisP;

    if($username=="" || $password == "")
    {
        echo "null username or password";
    }
    else{
        $status=login($username, $password);
        if($status)
        {
            header('Location: user_dashboard.php');
        }else{
            echo"wrong username or password";
        }
    }

?>