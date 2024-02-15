<!--
    Jeremy Granizo
    IT202 section 003
    Unit 11 assignment: Bread Shop
    jag254@njit.edu
-->
<?php
//get code first
require_once("database.php");
function is_valid_query($breadCODE,$db){
    
   
    $query='SELECT * FROM bread WHERE breadCode = :breadcode';
    $statement=$db->prepare($query);;
    $statement->bindValue(":breadcode",$breadCODE);
    $statement->execute();
    $result=$statement->fetch();
    $statement->closeCursor();

    if($statement->rowCount()>0){
        return false;
    }
    else
    {
     return true;
    }
   
}

?>