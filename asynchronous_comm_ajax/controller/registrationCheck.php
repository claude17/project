<?php
    
    require_once('../model/userModel.php');
    session_start();
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];

    // $isAvailable = checkEmailAvailability($email);
    // if($isAvailable)
    // {
    //     echo "This EMAIL ID is available";
    // }
    // else{
    //     echo "This EMAIL ID is not available";
    // }

    if($name == "" || $phone == "" || $email == "" || $password == "" || $confirmPassword == "")
    {
        echo "null value detected! Please complete all the fields";
    }
    elseif($confirmPassword != $password)
    {
        echo "confirm password did not match";
    }
    else{
        $user = ['name'=> $name, 'phone'=> $phone, 'email'=> $email, 'password'=>$password];
        $status = register($user);
        if($status)
        {
            $_SESSION['flag'] = 'true';
            $_SESSION['user'] = $user;
            header('Location: ../view/login.php');
        }
    }
?>