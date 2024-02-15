<!--
    Jeremy Granizo
    IT202 section 003
    Unit 11 assignment: Bread Shop
    jag254@njit.edu
-->
<?php
#create new bread product
#category of bread
#bread name
#bread description
#bread Price
# we will add the breadid and date automatically
session_start();

require_once('database.php');

$query='SELECT * FROM breadcategories  ORDER BY breadCategoryID';
$db=getDB();
$statement=$db->prepare($query);
$statement->execute();
$category=$statement->fetchAll();
$statement->closeCursor();



?>
<html>

<head>
    <title> Create page</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
        <link rel="icon" type="image/jpg" href="images/breadlogo.jpg"/>
</head>
<body>
<?php include('header.php'); ?>

    <h1>Create Bread Product</h1>
    
    <?php if (!empty($error)) {
            //checking if user already entered wrong inputs
            ?>
            <p style="color:red;">
                <?php echo htmlspecialchars($error); ?>
            </p>
        <?php } ?>
    <main>
        <form action='create_product.php' method="post" id="create_form" name="create_form">
            <label> Category: </label>
            <select name="categoryid" id="categoryID">
                <option value="0">Select a country</option>
                <?php foreach ($category as $categories) :?>
                    <option value="<?php
                    echo $categories['breadCategoryID']?>">
                    <?php echo $categories['breadCategoryName']?>
                </option>

                    <?php endforeach?>
                </select>
                <span></span>
                <br>
                <label>Bread Code: </label>
                <input type='text' id="breadCode" name='breadcode'/>
                <span></span>
                <br>
            <label>Bread Name: </label>
            <input type="text"id=breadName name='breadname'/>
            <span></span>
            <br>
            <label>Bread Description: </label>
            <input type="text" id=breadDescription name="description"/>
            <span></span>
            <br>
            <label>Bread Price: </label>
            <input type="text" id=breadPrice name="breadprice"/>
            <span></span>
            <br>
            <input type= "submit" id="submit_button" value="Submit"/>
            
            <input type="reset" id="reset_button"/>

                </form>
           


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
    <script src="https://code.jquery.com/jquery-3.7.1.slim.js" 
        integrity="sha256-UgvvN8vBkgO0luPSUl2s8TIlOSYRoGFAX4jlCIm9Adc=" 
        crossorigin="anonymous"></script>
    <script src="create.js"></script>
</body>
</html>