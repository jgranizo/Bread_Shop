<!--
    Jeremy Granizo
    IT202 section 003
    Unit 11 assignment: Bread Shop
    jag254@njit.edu
-->
<?php 

if (session_id() == '') {
    session_start();

}
if (!isset($login_message)) {
 $login_message = 'You must login to view this page.';
}
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Bread Shop</title>
    <link rel="stylesheet" type="text/css" href="styles.css">    
    <link rel="icon" type="image/jpg" href="images/breadlogo.jpg"/>
    
    </head>
  <body>
  <?php include('header.php'); ?>
    <h1>Bread Shop</h1>
  <main>
    <h1>Login</h1>
    <form action="authenticate.php" method="post">
      <label>Email:</label>
      <input type="text" name="email" value="">
      <br>
      <label>Password:</label>
      <input type="password" name="password" value="">
      <br>
      <input type="submit" value="Login">
    </form>
    <p><?php echo $login_message; ?></p>
  </main>
  <?php include("footer.php");?>
  </body>
</html>