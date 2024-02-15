<!--
    Jeremy Granizo
    IT202 section 003
    Unit 11 assignment: Bread Shop
    jag254@njit.edu
-->

<?php
function getDB(){
$local_dsn='mysql:host=localhost;port=3306;dbname=bread_shop';
$local_username='mgs_user';
$local_password='pa55word';


//changes these 3 variables for different server configuration
$dsn=$local_dsn;
$username=$local_username;
$password = $local_password;

try {
    $db=new PDO($dsn,$username,$password);
    //echo '<p>You are connected to the database!</p>';
    return $db;
}
//PDO is object
//PDO exceotion
//pdo statement
catch(PDOException $exception) {
    $error_message=$exception->getMessage();
    include('database_error.php');
    exit();


}
}

?>