<?php
    require_once('db.php');
    function login($email, $password)
    {
        $con = getConnection();
        $sql = "select * from persons where email='{$email}' and password='{$password}'";
        $result = mysqli_query($con, $sql);
        $user = mysqli_fetch_assoc($result);
        //$count = mysqli_num_rows($result);
        
        
        if($user){
            return $user;
        }
        else{
            return false;
        }
    }

    function register($user)
    {
        $name= $user['name'];
        $phone = $user['phone'];
        $email = $user['email'];
        $password = $user['password'];
        
        $con = getConnection();
        $sql = "INSERT INTO persons (name, phone, email, password)
        VALUES ('$name', '$phone', '$email', '$password')";

        if (mysqli_query($con, $sql)) {
            return true;
        } else {
            return false;
        }
    }

    function checkEmailAvailability($email)
    {
        $con = getConnection();
        $sql = "select * from persons where email='$email'";
        $result = mysqli_query($con, $sql);
        $user = mysqli_fetch_assoc($result);
        
        
        if($user){
            return $user;
        }
        else{
            return false;
        }
    }
?>