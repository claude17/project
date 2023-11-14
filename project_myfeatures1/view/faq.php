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

    <h2>Frequently Asked Questions</h2>

    <?php for($i=0;$i<count($faqs);$i++)
            {?>
                <strong><?=$faqs[$i]['faq_question']?></strong><br><br>
                <strong><?=$faqs[$i]['faq_answer']?></strong><br><br>
    <?php   }?>


</body>
</html>