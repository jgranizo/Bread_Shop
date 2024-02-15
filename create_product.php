<!--
    Jeremy Granizo
    IT202 section 003
    Unit 11 assignment: Bread Shop
    jag254@njit.edu
-->
<?php
 require_once("database.php");
$category_id=filter_input(INPUT_POST,'categoryid');
$bread_Name=filter_input(INPUT_POST,"breadname");
$bread_code=filter_input(INPUT_POST,"breadcode");
$bread_description=filter_input(INPUT_POST,"description");
$bread_price=filter_input(INPUT_POST,"breadprice");


$error="";
require_once('error_query.php');



   
        $db=getDB();
        if(!is_valid_query($bread_code,$db)){
            $error="The Bread Code value that you entered already exist. Please try again, with a different bread code value.";
            
            exit();

        }


    $query3='SELECT NOW()';
    
    $statement3=$db->prepare($query3);
    $statement3->execute();
    $date=$statement3->fetch();
    $date=$date[0];
    $statement3->closeCursor();


    $query2='SELECT MAX(breadID) FROM bread;';
    
    $statement2=$db->prepare($query2);
    $statement2->execute();
    $total=$statement2->fetch();
    $total=$total[0]+1;
  
    $statement2->closeCursor();

    $query ='INSERT INTO bread (breadID, breadCategoryID,breadCode,breadName,description,price,dateAdded) VALUES (:breadID,:categoryID,:breadCode,:breadName,:breadD,:BreadPrice,:datenow)';
    $statement1=$db->prepare($query);
    
    $statement1->bindValue(':breadID',$total);
    $statement1->bindValue(':categoryID',$category_id);
    $statement1->bindValue(':breadCode',$bread_code);
    $statement1->bindValue(':breadName',$bread_Name);
    $statement1->bindValue(':breadD',$bread_description);
    $statement1->bindValue(':BreadPrice',$bread_price);
    $statement1->bindValue(':datenow',$date);
    $statement1->execute();
    $statement1->closeCursor();
#check for duplicates now and create error messages
#add code name
include('bread.php');


?>