<!--
    Jeremy Granizo
    IT202 section 003
    Unit 11 assignment: Bread Shop
    jag254@njit.edu
-->
<?php 
include('database.php');
$firstName=filter_input(INPUT_POST,'first_name');
$lastName=filter_input(INPUT_POST,'last_name');
$email=filter_input(INPUT_POST,"email");
$password=filter_input(INPUT_POST,"password");

function add_bread_manager($email, $password,$firstName,$lastName) {
    $db = getDB();
    $hash = password_hash($password, PASSWORD_DEFAULT);
    $query = 'INSERT INTO breadmanagers (emailAddress, password,firstName,lastName)
              VALUES (:email, :password,:firstName,:lastName)';
    $statement = $db->prepare($query);
    $statement->bindValue(':email', $email);
    $statement->bindValue(':password', $hash);
    $statement->bindValue(':firstName', $firstName);
    $statement->bindValue(':lastName', $lastName);
    $statement->execute();
    $statement->closeCursor();
}
add_bread_manager($email,$password,$firstName,$lastName);

?>