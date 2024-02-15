<!--
    Jeremy Granizo
    IT202 section 003
    Unit 11 assignment: Bread Shop
    jag254@njit.edu
-->
<?php
session_start();
//slide 23
$_SESSION = [];
session_destroy();
//cleanup session id
$login_message='You have been logged out.';
include('login.php');


?>