<!--
    Jeremy Granizo
    IT202 section 003
    Unit 11 assignment: Bread Shop
    jag254@njit.edu
-->
<html>
    <head><title><Menu></Menu></title></head>
<body>
<?php 
  session_start();
  if (isset($_SESSION['is_valid_admin'])) { 
?>
    <p>
      <a href="logout.php">Logout</a>
    </p>
  <?php } else { ?>
    <p>
      <a href="login.php">Login</a>
    </p>
  <?php } ?>
</body>
</html>