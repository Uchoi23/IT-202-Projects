<?php
// Get the data from the form
    $Product_Description = filter_input(INPUT_POST, "Product_Description");
    $List_Price = filter_input(INPUT_POST, "List_Price");
    $Discount_Percent = filter_input(INPUT_POST, "Discount_Percent");

//Calculate the discount and discounted price
    $Discount = $List_Price * $Discount_Percent * 0.01;
    $Discount_Price = $List_Price - $Discount;
    
//Apply currency and percent formatting
    $List_Price_f = "$" . number_format($List_Price, 2);
    $Discount_Percent_f = $Discount_Percent . "%";
    $Discount_f = "$" . number_format($Discount, 2);
    $Discount_Price_f = "$" . number_format($Discount_Price, 2);
?>

<html>
    <head><title>Product Discount Calculator</title></head>
    <body>
        <h1>Product Discount Calculator</h1>
        <label>Product Description:</label>
        <span><?php echo htmlspecialchars($Product_Description);?></span>
        <br>
        <label>List Price:</label>
        <span><?php echo htmlspecialchars($List_Price_f);?></span>
        <br>
        <label>Discount Percent:</label>
        <span><?php echo htmlspecialchars($Discount_Percent_f);?></span>
        <br>
        <label>Discount Amount:</label>
        <span><?php echo htmlspecialchars($Discount_f);?></span>
        <br>
        <label>Discount Price:</label>
        <span><?php echo htmlspecialchars($Discount_Price_f);?></span>
    <body>
</html>