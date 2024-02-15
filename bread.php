<!--
    Jeremy Granizo
    IT202 section 003
    Unit 11 assignment: Bread Shop
    jag254@njit.edu
-->
<?php
 session_start();
require_once("database.php");
$db=getDB();
$queryBread='SELECT* FROM bread,breadcategories
WHERE bread.breadCategoryID = breadcategories.breadCategoryID
ORDER BY bread.breadCategoryID;
;';
$statement = $db->prepare($queryBread);
$statement->execute();
$bread=$statement->fetchAll();
$statement->closeCursor();

//print_r($bread);
?>
<html>
    <head>
        <title>Bread Shop</title>
        <link rel="stylesheet" type="text/css" href="styles.css">
        <link rel="icon" type="image/jpg" href="images/breadlogo.jpg"/>
    </head>
    <body>
        <?php include('header.php');?>
        <main><h1>Product List</h1>
       <table>
        <tr>
            <th>Category</th>
            <th>Code</th>
            <th>Name</th>
            <th class=desc>description</th>
        
            <th class="right">Price</th>
        </tr>

        <?php foreach($bread as $BREAD): ?>
            <tr><td><?php echo $BREAD['breadCategoryName']?></td>
                <td> <a href="Details.php?bread_id=<?php echo $BREAD['breadID'];?>"><?php echo $BREAD['breadCode'];?></a></td>
                <td><?php echo $BREAD['breadName'];?></td>
                <td><?php echo $BREAD['description'].'       ';?></td>
                <td><?php echo $BREAD['price'];?></td>
                <?php 
                    
                    if (isset($_SESSION['is_valid_admin'])) {?>
                <form action='delete_bread.php' method="post" class="deleteItem">
      
                <input type="hidden" name="bread_id" 
      
                value="<?php echo $BREAD['breadID'];?>"/>
                <td><input type='submit' class="delete-button" value="Delete" ></td>
                        
                      <?php }?>
            </form>
            </tr>
            <?php endforeach;?>
       </table>


       <figure class="bread-figure">
        <img src="images/brioche.jpg" alt="brioche" >
        <figcaption>Brioche Handmade Bread</figcaption>

    </figure>

    <figure class="bread-figure">
        <img src="images/pandebono.jpg" alt="pan" >
        <figcaption>Pandebono Handmade Bread</figcaption>

    </figure>
    
   
    
    <figure class="bread-figure">
        <img src="images/rye.jpg" alt="pan" >
        <figcaption>Rye Handmade Bread</figcaption>

    </figure>

    <figure class="bread-figure">
        <img src="images/French_Baguette.jpg" alt="pan" >
        <figcaption>French Baguette Handmade Bread</figcaption>

    </figure>
    <br>

    </main>
    <?php include("footer.php")?>


    <script>
    document.querySelectorAll('.delete-button').forEach(button => {
        button.addEventListener('click', function(event) {
            if (!confirm('Are you sure you want to delete this item?')) {
                event.preventDefault();
            }
        });
    });
</script>

    </body>
</html>