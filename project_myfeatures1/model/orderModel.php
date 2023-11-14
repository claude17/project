<?php
require_once('mydb.php');
include_once('../controller/sessionCheck.php');
function getOrderhistory(){
        $con = getConnection();
        $sql = "select * from orderhistory";
        $result = mysqli_query($con, $sql);
        $orders = [];
        
        while($orderhistory = mysqli_fetch_assoc($result)){
            array_push($orders, $orderhistory);
        }
        
        return $orders;
    }
?>