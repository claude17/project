<?php

//require_once('mydb.php');
require_once('../model/promotionModel.php');
$promotions=getPromotion();
?>
<html>
    <head>
        <title>Promotion</title>
    </head>
    <body>
        <form action="">
            <fieldset>
            <legend>Promotion</legend>
            <h1>Current Promotion</h1>
            <table border="1" width=100%>
    
                <?php for($i=0;$i<count($promotions);$i++)
                {?>
                <tr>
                    
                    <th><?=$promotions[$i]['promotion']?></th>
        <?php   }?>
                </tr>
                
            
            </table>
            <br><a href="user_dashboard.php">
            <br><button type="button">Back</button><br>
            </fieldset>
        </form>
        
    </body>
</html>