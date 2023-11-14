<?php
    include_once('../controller/sessionCheck.php');
    require_once('../model/aboutusModel.php');
    $storeAboutus=getAboutus();
?>

<html>
<head>
    <title>about us</title>
</head>
<body>

    <h1>About Us</h1>

    <?php for($i=0;$i<count($storeAboutus);$i++)
            {?>
                <h3><?=$storeAboutus[$i]['aboutus_text']?></strong></h3><br><br>
    <?php   }?>


</body>
</html>