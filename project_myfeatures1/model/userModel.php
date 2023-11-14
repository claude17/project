<?php

    require_once('mydb.php');
    //include_once('../controller/sessionCheck.php');
    function login($userName, $password){
        $con = getConnection();
        $sql = "select * from registration where userName='{$userName}' and password='{$password}'";
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

    function signup($user)
    {
        $firstName = $user['firstName'];
        $lastName = $user['lastName'];
        $userName = $user['userName'];
        $email = $user['email'];
        $password = $user['password'];
        $gender = $user['gender'];
        $phone = $user['phone'];
        $userType = $user['userType'];
        $con = getConnection();
        $sql = "INSERT INTO registration (firstName, lastName, userName, email, password, gender, phone, userType)
        VALUES ('$firstName', '$lastName', '$userName', '$email', '$password', '$gender','$phone','$userType')";

        if (mysqli_query($con, $sql)) {
            return true;
        } else {
            return false;
        }
    }
    


?>