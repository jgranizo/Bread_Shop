
<!--
    Jeremy Granizo
    IT202 section 003
    Unit 11 assignment: Bread Shop
    jag254@njit.edu
--><?php 
$bread_id=$_GET['bread_id'];
$flag=0;
//Retrieving bread_id from hyperlink
session_start();
require_once("database.php");
$db=getDB();
//check if bread id is in the table
$queryerror='SELECT COUNT(*) FROM bread
WHERE breadID=:breadID;';
$statementE=$db->prepare($queryerror);
$statementE->bindValue(':breadID',$bread_id);
$statementE->execute();
$error_check=$statementE->fetch();
$statementE->closeCursor();
if($error_check[0]>0){

//retrieving data from all tables where the ID is the same in both tables
//to be able to get country column
$queryBread='SELECT* FROM bread,breadcategories
WHERE bread.breadCategoryID = breadcategories.breadCategoryID AND bread.breadID=:breadID
ORDER BY bread.breadCategoryID;';
$statement= $db->prepare($queryBread);
$statement->bindValue(':breadID',$bread_id);
$statement->execute();
$bread=$statement->fetchAll();
$bread=$bread[0];
$statement->closeCursor();
$flag=1;
}
else{
    $flag=0;
}
//page creation 


?>
<html>
    <head>
        <title>Bread Detail's</title>
        <link rel="stylesheet" type="text/css" href="styles.css">
        <link rel="icon" type="image/jpg" href="images/breadlogo.jpg"/>
    </head>
    <body>
    <?php include('header.php'); ?>
        <main>
           
               <?php  
               if($flag){?>
               <div> 
                <h4>Bread ID: <?php echo $bread['breadID']?></h4>
                <br>
                <h4>Bread Code:  <?php echo $bread['breadCode']?></h4>
                <br>
                <h4>Bread Name:  <?php echo $bread['breadName']?></h4>
                <br>
                <h4>Bread description:  <?php echo $bread['description']?></h4>
                <br>
                <h4>Bread Price:  <?php echo $bread['price']?></h4>
                <br>
                <h4>Date Bread was added:  <?php echo $bread['dateAdded']?></h4>
                <script> </script>
                <ul id="image_rollovers">
                
                <li><img src="images/<?php echo $bread_id?>-blurred.jpeg" /></li>
             
               </ul>
               </div>
                <?php }
                else {?>
                <div>
                    <h4>The Bread record does not exist in the database</h4>
                </div>
                    <?php 
                }?>
          
        </main>
        <script src="https://code.jquery.com/jquery-3.7.1.slim.js" 
        integrity="sha256-UgvvN8vBkgO0luPSUl2s8TIlOSYRoGFAX4jlCIm9Adc=" 
        crossorigin="anonymous"></script>
        <script src="Details.js"></script>

    </body>
    
    <?php include("footer.php")?>
</html>