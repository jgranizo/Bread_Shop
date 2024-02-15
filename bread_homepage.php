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
?>
<html>
    

    <head>
        <title>Welcome Granizo's Bread Shop</title>
        <link rel="stylesheet" type="text/css" href="styles.css">
        
        <link rel="icon" type="image/jpg" href="images/breadlogo.jpg"/>
        

    </head>

    
    <body >
        

        <?php include('header.php'); ?>
        <h1>Welcome!</h1>
        <main>
           
       
        <p1>We offer a variety of Bread from all over the world. Including Columbian, French, Italian, Germany orginated bread! This business was created in the 1890s. 4 generations of my family passed down to me! We have been running for so long, I don't plan on stopping the business because all of my customers are always satisfied.</p1>
    <br>
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
    </body>

</html>

