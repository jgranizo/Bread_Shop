<!--
    Jeremy Granizo
    IT202 section 003
    Unit 11 assignment: Bread Shop
    jag254@njit.edu
-->
<?php
if (session_id() == '') {
    session_start();
}//setting default values for initial page load
if (!isset($first_name)) {
    $first_name = '';
}
if (!isset($last_name)) {
    $last_name = '';
}
if (!isset($street_address)) {
    $street_address = '';
}
if (!isset($city)) {
    $city = '';
}
if (!isset($state)) {
    $state = '';
}
if (!isset($zip_code)) {
    $zip_code = '';
}
if (!isset($package_weight)) {
    $package_weight = '';
}
if (!isset($package_height)) {
    $package_height = '';
}
if (!isset($package_length)) {
    $package_length = '';
}
if (!isset($package_width)) {
    $package_width = '';
}
if (!isset($order_number)) {
    $order_number = '';
}
if (!isset($ship_date)) {
    $ship_date = '';
}

?>
<html><head>
<title> Shipping form</title>
        <link rel="stylesheet" type="text/css" href="styles.css">
        <link rel="icon" type="image/jpg" href="images/breadlogo.jpg"/>
</head>


<body>
<?php include('header.php'); ?>
    <main class="form">
        <h1>Shipping Label</h1>

        <?php if (!empty($error_message)) {
            //checking if user already entered wrong inputs
            ?>
            <p style="color:red;">
                <?php echo htmlspecialchars($error_message); ?>
            </p>
        <?php } ?>
        <form action="label_results.php" method="post">
            <label>First Name: </label>
            <input type="text" name="first_name" value="<?php echo htmlspecialchars($first_name); ?>" />
            <br>
            <label>Last Name: </label>
            <input type="text" name="last_name" value="<?php echo htmlspecialchars($last_name); ?>" />

            <br>
            <label>Street Address: </label>
            <input type="text" name="street_address" value="<?php echo htmlspecialchars($street_address); ?>" />

            <br>
            <label>City: </label>
            <input type="text" name="city" value="<?php echo htmlspecialchars($city); ?>" />

            <br>
            <label>State: </label>
            <select name="state">
                <option value=""></option>
                <option value="AL">Alabama</option>
                <option value="AK">Alaska</option>
                <option value="AZ">Arizona</option>
                <option value="AR">Arkansas</option>
                <option value="CA">California</option>
                <option value="CO">Colorado</option>
                <option value="CT">Connecticut</option>
                <option value="DE">Delaware</option>
                <option value="DC">District Of Columbia</option>
                <option value="FL">Florida</option>
                <option value="GA">Georgia</option>
                <option value="HI">Hawaii</option>
                <option value="ID">Idaho</option>
                <option value="IL">Illinois</option>
                <option value="IN">Indiana</option>
                <option value="IA">Iowa</option>
                <option value="KS">Kansas</option>
                <option value="KY">Kentucky</option>
                <option value="LA">Louisiana</option>
                <option value="ME">Maine</option>
                <option value="MD">Maryland</option>
                <option value="MA">Massachusetts</option>
                <option value="MI">Michigan</option>
                <option value="MN">Minnesota</option>
                <option value="MS">Mississippi</option>
                <option value="MO">Missouri</option>
                <option value="MT">Montana</option>
                <option value="NE">Nebraska</option>
                <option value="NV">Nevada</option>
                <option value="NH">New Hampshire</option>
                <option value="NJ">New Jersey</option>
                <option value="NM">New Mexico</option>
                <option value="NY">New York</option>
                <option value="NC">North Carolina</option>
                <option value="ND">North Dakota</option>
                <option value="OH">Ohio</option>
                <option value="OK">Oklahoma</option>
                <option value="OR">Oregon</option>
                <option value="PA">Pennsylvania</option>
                <option value="RI">Rhode Island</option>
                <option value="SC">South Carolina</option>
                <option value="SD">South Dakota</option>
                <option value="TN">Tennessee</option>
                <option value="TX">Texas</option>
                <option value="UT">Utah</option>
                <option value="VT">Vermont</option>
                <option value="VA">Virginia</option>
                <option value="WA">Washington</option>
                <option value="WV">West Virginia</option>
                <option value="WI">Wisconsin</option>
                <option value="WY">Wyoming</option>
            </select>

            <br>
            <label>5 digit Zip Code: </label>
            <input type="text" pattern="\b\d{5}\b" name="zip_code" value="<?php echo htmlspecialchars($zip_code); ?>" />

            <br>

            <h1>Shipping Details: </h1>

            <label>Ship Date: </label>
            <input type="date" name="ship_date" value="<?php echo htmlspecialchars($ship_date); ?>" />

            <br>
            <label>Order Number: </label>
            <input type="text" name="order_number" value="<?php echo htmlspecialchars($order_number); ?>" />

            <br>

            <label>Package height: </label>
            <input type="text" name="package_height" value="<?php echo htmlspecialchars($package_height); ?>" />
            <label> inches</label>
            <br>
            <label>Package length: </label>
            <input type="text" name="package_length" value="<?php echo htmlspecialchars($package_length); ?>" />
            <label> inches</label>
            <br>
            <label>Package width: </label>
            <input type="text" name="package_width" value="<?php echo htmlspecialchars($package_width); ?>" />
            <label> inches</label>

            <h1>Package Weight</h1>
            <label></label>
            <input type="text" name="package_weight" value="<?php echo htmlspecialchars($package_weight); ?> " />
            <label> lbs</label>
            <br>

            <input type="submit" value="Submit" />
        </form>
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