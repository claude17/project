<?php

require_once('../model/orderModel.php');
include_once('../controller/sessionCheck.php');
$username=$_SESSION['username'];
$orders=getOrderhistory();


?>
<html>
    <head>
        <title>Past Order</title>
    </head>
    <body>
        <form action="">
            <fieldset>
            <legend>Past Order</legend>
            <h1>Your past orders</h1>
            <table border="1" width=50%>
                <tr>
                    <th>id</th>
                    <th>food name</th>
                    <th>food quantity</th>
                    <th>price</th>
                    <th>amount paid</th>
                    <th>date</th>
                    <th>adress</th>
                </tr>
                <?php for($i=0;$i<count($orders);$i++)
                {?>
                <tr>
                    
                    <td><?=$orders[$i]['id']?></td>
                    <td><?=$orders[$i]['food name']?></td>
                    <td><?=$orders[$i]['food quantity']?></td>
                    <td><?=$orders[$i]['price']?></td>
                    <td><?=$orders[$i]['amount paid']?></td>
                    <td><?=$orders[$i]['date']?></td>
                    <td><?=$orders[$i]['adress']?></td>

        <?php   }?>
                </tr>
            </table>
            <br><a href="user_dashboard.php">
            <br><button type="button">Back</button><br>
            </fieldset>
        </form>
        
    </body>
</html>