<?php
    require_once('mydb.php');
    include_once('../controller/sessionCheck.php');
    function addReview($username,$reviewfor,$reviewtext,$ratings)
    {
        $con = getConnection();
        $sql = "INSERT INTO review (username,reviewType,review,rating) VALUES ('$username','$reviewfor','$reviewtext','$ratings')";

        if (mysqli_query($con, $sql)) {
            return true;
        } else {
            return false;
        }
    }

    function getReview(){
        $con = getConnection();
        $sql = "select * from review";
        $result = mysqli_query($con, $sql);
        $reviews = [];
        
        while($review = mysqli_fetch_assoc($result)){
            array_push($reviews, $review);
        }
        
        return $reviews;
    }
?>