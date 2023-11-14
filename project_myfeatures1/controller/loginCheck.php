<?php
    require_once('../model/userModel.php');
    //include_once('../controller/sessionCheck.php');

    session_start();
    $userName = $_REQUEST['username'];
    $password = $_REQUEST['password'];

    if($userName == "" || $password == "" ){
    
        echo "null username or password!";
    
    }else{
        $status = login($userName, $password);
        if($status)
        {
            if ($status['userType'] == "admin"){
                $_SESSION['flag'] = 'true';
                $_SESSION['username'] = $userName;
                header('location: ../view/admin_dashboard.php');
            }
            elseif ($status['userType'] == "customer") {
                $_SESSION['flag'] = 'true';
                $_SESSION['username'] = $userName;
                header('location: ../view/user_dashboard.php');
            }
        }
        else{
                echo "invalid user!";
            }
        
    }
?>