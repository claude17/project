<?php

    require_once('db.php');
    
    function login($username, $password){
        $con = getConnection();
        $sql = "select * from user where username='{$username}' and password='{$password}'";
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
?>