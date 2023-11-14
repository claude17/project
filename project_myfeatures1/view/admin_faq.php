<?php
    require_once('../model/faqModel.php');
    include_once('../controller/sessionCheck.php');
    $faqs=getFaq();
   
?>

<html>
<head>
    <title>FAQ</title>
</head>
<body>
<form action="admin_faq.php" method="post">

    <h2>Frequently Asked Questions</h2>

    <?php for($i=0;$i<count($faqs);$i++)
            {?>
                <?=$faqs[$i]['faq_id']?>
                <strong><?=$faqs[$i]['faq_question']?></strong><br><br>
                <strong><?=$faqs[$i]['faq_answer']?></strong><br><br>
    <?php   }?>
    <h3>add faq</h3>
    Input FAQ: <input type="text" name="question" value="" />
    Write Answer: <input type="text" name="answer" value="" />
    <button type="submit" name="submit" value="submit">Add</button>
    <h3>delete faq</h3>
    write corresponding question-id to delete: <input type="text" name="faq_id" value="" />
    <button type="submit" name="submit" value="submit">Delete</button>

    <br><a href="admin_dashboard.php">
    <br><button type="button">Back</button><br>
    

</form>

</body>
</html>

<?php
    require_once('../model/faqModel.php');
    $faqs=getFaq();
    if(isset($_POST['question'] , $_POST['answer']))
    {
        
        $question=$_POST['question'];
        $answer = $_POST['answer'];
        if($question == "" || $answer == "")
        {
            echo "null value inserted";
    
        }
        else{
            addFaq($question,$answer);
            header('location: admin_faq.php');
            
        }
    }

    if(isset($_POST['faq_id']))
    {
        
        $faqId=$_POST['faq_id'];
        if($faqId == "")
        {
            echo "null value inserted";
    
        }
        else{
            deleteFaq($faqId);
            header('location: admin_faq.php');
            
        }
    }


?>

