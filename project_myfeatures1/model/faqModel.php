<?php
require_once('mydb.php');
include_once('../controller/sessionCheck.php');
function getFaq(){
        $con = getConnection();
        $sql = "select * from faq";
        $result = mysqli_query($con, $sql);
        $faqs = [];
        
        while($faq = mysqli_fetch_assoc($result)){
            array_push($faqs, $faq);
        }
        
        return $faqs;
    }

    function addFaq($question,$answer)
    {
        $con = getConnection();
        $sql = "INSERT INTO faq (faq_question, faq_answer) VALUES ('$question','$answer')";

        if (mysqli_query($con, $sql)) {
            return true;
        } else {
            return false;
        }
    }

    function deleteFaq($faqId)
    {
        $con = getConnection();
        $sql = "DELETE FROM faq WHERE faq_id = $faqId";

        if (mysqli_query($con, $sql)) {
            return true;
        } else {
            return false;
        }
    }
?>