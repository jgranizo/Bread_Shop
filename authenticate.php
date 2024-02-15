<!--
    Jeremy Granizo
    IT202 section 003
    Unit 11 assignment: Bread Shop
    jag254@njit.edu
-->
<?php
// Start session management and include necessary functions

session_start();
require_once('admin_db.php');
$email=filter_input(INPUT_POST,'email');
$password=filter_input(INPUT_POST,'password');
//field validation
if(is_valid_admin_login($email,$password)){
    $_SESSION['is_valid_admin'] = true;
    $_SESSION['email']=$email;
    include('bread_homepage.php');
}else{
    if($email===null && $password===null){
        $login_message='You must log in to view this page.';
    }else{
        $login_message='Invalid credentials.';
    }
include('login.php');
}
    ?>
    