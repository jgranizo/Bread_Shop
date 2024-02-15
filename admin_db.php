<!--
    Jeremy Granizo
    IT202 section 003
    Unit 11 assignment: Bread Shop
    jag254@njit.edu
-->
<?php
require_once('database.php');

function is_valid_admin_login($email,$password){

    $db=getDB();
    $query = 'SELECT password from breadmanagers WHERE emailAddress = :email';
    $statement= $db->prepare($query);
$statement->bindValue(':email',$email);
$statement->execute();
$row=$statement->fetch();
$statement->closeCursor();



if( $row === false){
    return false;
} else{
    $hash=$row['password'];
    return password_verify($password,$hash);
}

}
?>