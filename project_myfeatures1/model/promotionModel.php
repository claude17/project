<?php
    require_once('mydb.php');
    include_once('../controller/sessionCheck.php');
    function getPromotion(){
        $con = getConnection();
        $sql = "select * from promotion";
        $result = mysqli_query($con, $sql);
        $promotions = [];
        
        while($promotion = mysqli_fetch_assoc($result)){
            array_push($promotions, $promotion);
        }
        
        return $promotions;
    }

    function addPromotion($addedPromotion)
    {
        $con = getConnection();
        $sql = "INSERT INTO promotion (promotion) VALUES ('$addedPromotion')";

        if (mysqli_query($con, $sql)) {
            return true;
        } else {
            return false;
        }
    }

    function deletePromotion($promotionId)
    {
        $con = getConnection();
        $sql = "DELETE FROM promotion WHERE promotion_id = $promotionId";

        if (mysqli_query($con, $sql)) {
            return true;
        } else {
            return false;
        }
    }

?>