<!--
    Jeremy Granizo
    IT202 section 003
    Unit 11 assignment: Bread Shop
    jag254@njit.edu
-->
<?php

require_once("database.php");
//get values
$bread_id=filter_input(INPUT_POST,'bread_id',FILTER_VALIDATE_INT);

if($bread_id != FALSE){
    
    $db=getDB();
    //delete product
    $query = 'DELETE FROM bread WHERE breadID=:bread_id';
    $statement=$db->prepare($query);
    $statement->bindValue(':bread_id',$bread_id);
    $statement->execute();
    $statement->closeCursor();

    include('bread.php');
}

?>