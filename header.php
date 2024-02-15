<!--
    Jeremy Granizo
    IT202 section 003
    Unit 11 assignment: Bread Shop
    jag254@njit.edu
-->
<?php 
require_once('database.php');
if (isset($_SESSION['email'])) {
    $e=$_SESSION['email'];


$db=getDB();
$query2 = 'SELECT firstName,lastName,emailAddress from breadmanagers where emailAddress =:email';
$statement2=$db->prepare($query2);
$statement2->bindValue(':email',$_SESSION['email']);
$statement2->execute();
$arr=$statement2->fetchAll();
$name=$arr[0];
$first_name=$name[0];
$last_name=$name[1];
$email=$name[2];
$statement2->closeCursor();
}

?>
<header >  
    <a href="bread_homepage.php"><img class="header" src="images/breadlogo.jpg" alt="Bread Logo"  height="60"
    ></a>
   <?php if (isset($_SESSION['is_valid_admin'])) {?>  
    <h3>Welcome <?php echo $first_name .' '.$last_name." "." $email";?> to Granizo's Bread Shop </h3>
   <?php }else { ?>
    <h3>Granizo's Bread Shop </h3><?php }?>
    <nav>
        
                <ul>
                    <li><a href="bread_homepage.php"> Home</a></li>
                    <li><a href="bread.php"> Product List</a></li>
                <?php 
                    
                    if (isset($_SESSION['is_valid_admin'])) {?>  
                    <li><a href="shipping_form.php"> Shipping</a></li>
                    <li><a href="create.php">Create Bread</a></li>
                    <li><a href="logout.php">logout</a>
                    <?php } 
                    else { ?>
                            <li><a href="login.php">Login</a></li>
                         <?php } ?>

                </ul>
            </nav>
</header>