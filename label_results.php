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
//get data from form page
$first_name=filter_input(INPUT_POST,'first_name');
$last_name=filter_input(INPUT_POST,'last_name');
$street_address=filter_input(INPUT_POST,'street_address');
$city=filter_input(INPUT_POST,'city');
$state=filter_input(INPUT_POST,'state');
$zip_code=filter_input(INPUT_POST,'zip_code');
$package_weight=filter_input(INPUT_POST,'package_weight',FILTER_VALIDATE_FLOAT);
$package_height=filter_input(INPUT_POST,'package_height',FILTER_VALIDATE_FLOAT);
$package_width=filter_input(INPUT_POST,'package_width',FILTER_VALIDATE_FLOAT);
$package_length=filter_input(INPUT_POST,'package_length',FILTER_VALIDATE_FLOAT);
$ship_date=filter_input(INPUT_POST,'ship_date');
$order_number=filter_input(INPUT_POST,'order_number',FILTER_VALIDATE_INT);

$error_message="";


if($package_weight===FAlSE){
    $error_message.='Package weight must be a valid number.   ';

}
else if($package_weight>150){
    $error_message.='Package weight must be 150 lbs or less.        ';
}
else{$error_message='';}


if($package_height===FALSE){
    $error_message.='Package height must be a valid number.     ';
}
        else if($package_height<=0.0){
    $error_message.='Package height must be higher than 0 inches.       ';
    }
        else if($package_height>36.0){
            $error_message.='Package height must be under 36 inches.        ';
             }
             else{$error_message='';}


if($package_width===FALSE){
    $error_message.='Package width must be a valid number.      ';
}

        else if($package_width<=0.0){
            $error_message.='Package width must be higher than 0 inches.     ';
         }

        else if($package_width>36.0){
            $error_message.='Package width must be under 36 inches.     ';
            }
            else{$error_message='';}

if($package_length===FALSE){
            $error_message.='Package length must be a valid number.     ';
        }
        
        else if($package_length<=0.0){
                $error_message.='Package length must be higher than 0 inches.       ';
                }
        
        else if($package_length>36.0){
                    $error_message.='Package length must be under 36 inches.        ';
                    }
            else{$error_message='';}

if($order_number===FALSE){
    $error_message.='Order number must be a valid order number. ';
}
else{$error_message='';}
if($error_message!=''){
    include('shipping_form.php');
    exit();
}




                ?>
<!DOCTYPE html>
<html>
    <head> <title> Label Results</title>
        <link rel="stylesheet" type="text/css" href="styles.css">
   
        <link rel="icon" type="image/jpg" href="images/breadlogo.jpg"/>
</head>
    <body>

    <?php include('header.php'); ?>
                <main>
                    <h1>Label Results</h1>
                    <label>From Address: </label>
                    <span>323 Dr Martin Luther King Jr Blvd, Newark, NJ 07102</span>
                    <br>
                    <label>To Address: </label>
                    <span><?php echo $street_address." ".$city." ".$state." ".$zip_code?></span>
                    <br>
                    <label>Package Dimensions: </label>
                    <span> <?php echo "Height: ".$package_height." inches,  Length: ".$package_length." inches,  Width: ".$package_width." inches";?></span>
                    <br>
                    <label>Package weight: </label>
                    <span><?php echo $package_weight." lbs";?></span>
                    <br>
                    <label>Shipping Company: </label>
                    <span>UPS</span>
                    <br>
                    <label>Shipping Class: </label>
                    <span>Priority Mail</span>
                    <br>
                    <img src="images/images.png" alt=barcode>
                    <br>
                    <label>Order Number: </label>
                    <span> <?php echo $order_number;?></span>
                    <br>
                    <label>Ship Date: </label>
            
                    <span><?php echo $ship_date; ?></span>

                </main>
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


                <?php include("footer.php")?>
    </body>
</html>

