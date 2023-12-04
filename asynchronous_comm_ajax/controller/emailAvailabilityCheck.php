<?php
    require_once('../model/userModel.php');
    {
        $email=$_POST['email'];
        $isAvailable = checkEmailAvailability($email);
        if($email=="")
        {
            echo "not available";
        }
        else if(!$isAvailable)
        {
            echo "This EMAIL ID is available";
        }
        else{
            echo "This EMAIL ID is not available";
        }
    }
    
?>