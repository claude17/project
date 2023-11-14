<?php
    session_start();
    require_once('../model/userModel.php');
    
    //require_once('mydb.php');
    
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $userName = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['gender'])) {
            $gender = $_POST['gender'];
        }
        else{
            $gender="";
        } 
    }
    $phone = $_POST['phone'];
    $userType="customer";

    function checkCharacters($input){
        $isOnlyLetters = true;
        for ($i = 0; $i < strlen($input); $i++) {
            $char = $input[$i];

            if (!($char >= 'a' && $char <= 'z') && !($char >= 'A' && $char <= 'Z')) {
                $isOnlyLetters = false;
                break;
            }
        }
        if(!$isOnlyLetters)
        {
            return true;
        }
        
    }

    function checkUsername($input)
    {
        $isValid=true;
        for ($i = 0; $i < strlen($input); $i++) {
            $char = $input[$i];

            if (!(($char >= 'a' && $char <= 'z') || ($char >= 'A' && $char <= 'Z') || is_numeric($char) || $char === '.' || $char === '_')) {
                $isValid = false;
                break;
            }
        }
        if(!$isValid)
        {
            return true;
        }
    }

    function digitCheck($input, $digit)
    {
        if(strlen($input) <= $digit-1)
        {
            return true;
        }
    }
    
    function validEntris($firstName,$lastName,$userName,$email,$password,$gender,$phone,$userType)
    {
        if($firstName == "" || $lastName == "" || $userName == "" || $email == "" || $password == "" || $gender == "" || $phone == ""){
            return false;
        }
        elseif(checkCharacters($firstName)){
            return false;
        }
        elseif(checkCharacters($lastName)){
            return false;
        }
        elseif(checkUsername($userName)) {
            return false;
        
        }elseif(digitCheck($userName,6)){
            return false;
        }elseif(digitCheck($password,6)){
            return false;
        }elseif(digitCheck($phone,11)) {
            return false;
        
        }else{
            $user = ['firstName'=> $firstName, 'lastName'=> $lastName, 'userName'=> $userName, 'email'=>$email, 'password'=> $password, 'gender'=> $gender, 'phone'=> $phone, 'userType'=> $userType];
            $status = signup($user);
            //$_SESSION['user'] = $user;
            //header('location: ../view/login.html');
            if ($status){
                //echo "you have signed up successfully";
                //$_SESSION['flag'] = 'true';
                return true;
            }
        }
    }
?>

<html>
    <body>
        <form method="post" action="registrationCheck.php" enctype="">
            <fieldset>
                <legend><h3>REGISTRATION</h3></legend>
                First Name <br>
                <input type="text" name="firstName" value="" /> <b><?php if($firstName==""){
                    echo "firstName is null";
                }elseif(checkCharacters($firstName)){
                    echo "only character is allowed";
                }?></b><br><br>
                Last Name <br>
                <input type="text" name="lastName" value="" /> <b><?php if($lastName==""){
                    echo "lastName is null";
                }elseif(checkCharacters($lastName)){
                    echo "only character is allowed";
                }?></b><br><br>
                User Name <br>
                <input type="text" name="username" value="" /> <b><?php if($userName==""){
                    echo "username is null";
                }elseif(digitCheck($userName,6)){
                    echo "must be atleast 6 characters long";
                }elseif(checkUsername($userName)){
                    echo "only character,numeric,dot and underscore is allowed";
                }?></b><br><br>
                Email <br>
                <input type="email" name="email" value="" /> <b><?php if($email==""){
                    echo "email is null";
                }?></b> <br><br>
                Password <br>
                <input type="password" name="password" value="" /> <b><?php if($password==""){
                    echo "password is null";
                }elseif(digitCheck($password,6)){
                    echo "password must be atleast 6 digit long";
                }?></b> <br><br>
                    
                <legend> Gender </legend>
                <input type="radio" name="gender" value="Male" /> Male
                <input type="radio" name="gender" value="Female" /> Female
                <input type="radio" name="gender" value="Other" /> Other
                    
                    
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b><?php if($gender==""){
                    echo "must select a gender";
                }?></b>
                    <br><br>
                Phone <br>
                <input type="number" name="phone" value="" /> <b><?php if($phone==""){
                    echo "phone is null";
                }elseif(digitCheck($phone,11)){
                    echo "phone number must be 11 digit long";
                }?></b> <br><br>
                <input type="submit" name="submit" value="Sign Up" />
                <input type="reset" name="reset" value="Reset" />
                <p><b><?php
                // if(!($firstName == "" || $lastName == "" || $userName == "" || $email == "" || $password == "" || $gender == "" || $phone == "")){
                //     $user = ['firstName'=> $firstName, 'lastName'=> $lastName, 'userName'=> $userName, 'email'=>$email, 'password'=> $password, 'gender'=> $gender, 'phone'=> $phone, 'userType'=> $userType];
                //     $status = signup($user);
                //     //$_SESSION['user'] = $user;
                //     //header('location: ../view/login.html');
                    
                //     if ($status){
                //         echo "you have signed up successfully";
                //         //$_SESSION['flag'] = 'true';
                        
                //     }
                // }
                if(validEntris($firstName,$lastName,$userName,$email,$password,$gender,$phone,$userType))
                {
                    echo "you have signed up successfully";
                }
                // else{
                //     echo "signup was not successful";
                // }
                ?> </b></p>
                <p><br>click here to <a href="../view/login.php">Log In</a></p>
            </fieldset>
                
        </form>
        
    </body>
</html>

  