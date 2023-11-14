<?php
    require_once('../model/aboutusModel.php');
    include_once('../controller/sessionCheck.php');
    $storeAboutus=getAboutus();
?>

<html>
<head>
    <title>about us</title>
</head>
<body>
<form action="admin_aboutus.php" method="post">
    <h1>About Us</h1>

    <?php for($i=0;$i<count($storeAboutus);$i++)
            {?>
                <h3><?=$storeAboutus[$i]['aboutus_text']?></strong></h3>
    <?php   }?>
    <br><br>
    <h2>Update the about us:</h2>
    <?php for($i=0;$i<count($storeAboutus);$i++)
            {?>
                <textarea name="aboutustext" cols="30" rows="10"><?=$storeAboutus[$i]['aboutus_text']?></textarea>
                
    <?php   }?>
    <br><button type="submit" name="submit" value="submit">Update</button>
    <br><a href="admin_dashboard.php">
    <br><button type="button">Back</button><br>
    
</form>
<?php
    require_once('../model/aboutusModel.php');
    if (isset($_POST['aboutustext'])) 
    {
        
        $aboutusText=$_POST['aboutustext'];
        if($aboutusText == "")
        {
            echo "null value inserted";
    
        }
        else{
            updateAboutus($aboutusText);
            header('location: admin_aboutus.php');
            
        }
    }
?>

</body>
</html>