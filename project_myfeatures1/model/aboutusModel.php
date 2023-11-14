<?php
require_once('mydb.php');
include_once('../controller/sessionCheck.php');
function getAboutus(){
    $con = getConnection();
    $sql = "select * from aboutus";
    $result = mysqli_query($con, $sql);
    $storeAboutus = [];
    
    while($aboutuslist = mysqli_fetch_assoc($result)){
        array_push($storeAboutus, $aboutuslist);
    }
    
    return $storeAboutus;
}

function updateAboutus($aboutusText){
    $con = getConnection();
    $sql = "UPDATE aboutus SET aboutus_text='$aboutusText' WHERE aboutus_id=1";
    $result = mysqli_query($con, $sql);
          
    if ($result) {
        return true;
    } else {
        return false; 
    }
}
?>