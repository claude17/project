<?php
    require_once('../model/userModel.php');

    session_start();
    $email = $_REQUEST['email'];
    $password = $_REQUEST['password'];

    if($email == "" || $password == "" ){
    
        echo "null email or password!";
    
    }else{
        $status = login($email, $password);
        if($status)
        {
            $_SESSION['flag'] = 'true';
            header('location: ../view/home.php');
        }
        else{
            header('Location: ../view/registration.php');
        }
        
    }
?>