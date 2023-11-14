<?php
    require_once('../model/promotionModel.php');
    include_once('../controller/sessionCheck.php');
    $promotions=getPromotion();
   
?>

<html>
    <head>
        <title>Promotion</title>
    </head>
    <body>
        <form action="deletepromotion.php" method="post">
            
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
            <h3>write corresponding promotion-id to delete:<h3> <input type="text" name="promotion_id" value="" />
            <button type="submit" name="submit" value="submit">Delete</button>
            <br><a href="admin_promotion.php">
            <br><button type="button">Back</button><br>
            </fieldset>
        </form>
        
    </body>
</html>

<?php
    require_once('../model/promotionModel.php');

    if(isset($_POST['promotion_id']))
    {
        
        $promotionId=$_POST['promotion_id'];
        if($promotionId == "")
        {
            echo "null value inserted";
    
        }
        else{
            deletePromotion($promotionId);
            header('location: admin_promotion.php');
            
        }
    }


?>