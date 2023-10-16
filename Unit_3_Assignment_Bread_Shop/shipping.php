<!-- Name: Raphael Holganza Course: IT 202-003 Date: October 6, 2023 Email: rmh38@njit.edu Assignment: Unit 3 Assignment-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bakery_styling.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inclusive+Sans&family=Karla:wght@300&family=Onest&display=swap" rel="stylesheet">
    <title>Shipping Page</title>
    <style>
        body{
            background-image: url("images/shippingbread.jpeg");
            background-size: cover;
            background-repeat: no-repeat;
        }
        .shippingParagraph{
            font-family: 'Karla', sans-serif;
            font-size: 20px;
            font-style: Bold;
            text-align: center;
            color:#D3D3D3;
        }
        #error{
            font-family: 'Karla', sans-serif;
            font-size: 20px;
            font-style: Bold;
        }
    </style>
</head>
<body>
    <?php include ("bakery_header.php")?>
    <h1 class = "shippingParagraph" style = "font-size: 40px;" > 🍞 The Delivery is Almost Set 🍞 <h1>
    <p class = "shippingParagraph"> Once we finish these last few steps, say hello to baked goodness!</p>  
    <!-- Error Message -->
    <?php if(!empty($error_message)) { ?>
        <p id= "error" style= "color: red;">
        <?php echo htmlspecialchars($error_message); ?>
        </p>
        <?php } ?>
    <!--Input Details Form -->
    <form action= "shipping_receipt.php" method= "post">
        <section id = "To_Input">
            <label style="font-size: 40px;">Who are we shipping this to 📩</label> 
            <br>
            <br>
            <!-- First and Last Name-->
            <label>First and Last Name:</label><br>
            <input type = "text" name= "fullname" 
                value= "<?php echo htmlspecialchars($fullname); ?>">
            <br> <!-- Street Address-->
            <br>
            <label>Street Address:</label><br>
            <input type = "text" name= "street_address" 
                value= "<?php echo htmlspecialchars($street_address); ?>">
            <br> <!-- City -->
            <br>
            <label>City:</label><br>
            <input type = "text" name= "city" 
                value= "<?php echo htmlspecialchars($city); ?>">
            <br> <!-- State -->
            <br>
            <label>State:</label><br>
            <input type = "text" name= "state" 
                value= "<?php echo htmlspecialchars($state); ?>">
            <br><!-- Zip Code -->
            <br>
            <label>Zip Code:</label><br>
            <input type = "text" name= "zip_code" 
                value= "<?php echo htmlspecialchars($zip_code); ?>">
            <br>
            <br>
            <label style="font-size: 40px;">Package Details 📦</label> 
            <br>
            <br>
            <!-- Shipping Date -->
            <label>Shipping Date:</label><br>
            <input type="date"  name="shipping_date"
                value= "<?php echo htmlspecialchars($shipping_date); ?>">
            <br> <!-- Order Number-->
            <br>
            <label>Order Number:</label><br>
            <input type = "text" name= "order_number" 
                value= "<?php echo htmlspecialchars($order_number); ?>">
            <br> <!-- Length -->
            <br>
            <label>Length(in):</label><br>
            <input type = "number" name= "length" 
                value= "<?php echo htmlspecialchars($length); ?>">
            <br> <!-- Width -->
            <br>
            <label>Width(in):</label><br>
            <input type = "number" name= "width" 
                value= "<?php echo htmlspecialchars($width); ?>">
            <br> <!-- Height -->
            <br>
            <label>Height(in):</label><br>
            <input type = "number" name= "height" 
                value= "<?php echo htmlspecialchars($height); ?>">
            <br> <!-- Weight -->
            <br>
            <label>Weight(lbs):</label><br>
            <input type = "number" name= "weight" 
                value= "<?php echo htmlspecialchars($weight); ?>">
            <br>
            <br>
            <input type = "submit" value= "Submit" style="height: 30px;">
            <input type = "reset" name= "Reset" style="height: 30px;">
    </section>
</body>
</html>