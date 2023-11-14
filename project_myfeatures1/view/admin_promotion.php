<?php

//require_once('mydb.php');
require_once('../model/promotionModel.php');
include_once('../controller/sessionCheck.php');
$promotions=getPromotion();
?>
<html>
    <head>
        <title>Promotion</title>
    </head>
    <body>
        <form action="">
            
            <h1>Current Promotion</h1>
            <table border="1" width=100%>
    
                <?php for($i=0;$i<count($promotions);$i++)
                {?>
                <tr>
                    <th><?=$promotions[$i]['promotion_id']?></th>
                    <th><?=$promotions[$i]['promotion']?></th>
        <?php   }?>
                </tr>
                
            
            </table>
            <a href="addpromotion.php"> Add Pormotion </a><br>
            <a href="deletepromotion.php"> Delete Promotion </a>
            <br><a href="admin_dashboard.php">
            <br><button type="button">Back</button><br>
            </fieldset>
        </form>
        
    </body>
</html>