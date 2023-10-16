<!-- Name: Raphael Holganza Course: IT 202-003 Date: October 6, 2023 Email: rmh38@njit.edu Assignment: Unit 3 Assignment-->
<!-- HTML for Shipping Report -->
<html>
    <head>
        <title>Shipping Report</title>
        <link rel= "stylesheet" href="bakery_styling.css">
        <style>
            body{
                background-color: #A0A977;
            }
            h1{
                font-family: 'Karla', sans-serif;
                font-size: 30px;
                font-style: Bold;
                color:#212121;
                padding-left: 10px;
            }
            #topcontent{
                background-color: white;
                border-style: solid;
                border: 10px;
                padding-left: 10px;
            }
            .shipping-label{
                background-color: white;
                border-style: solid;
                border-width: 10px;
                max-width: 500px;
                margin: 100px;
                margin-left: 300px;
            }
            p{
                font-family: 'Karla', sans-serif;
                font-size: 20px;
                font-style: Bold;
                color:#212121;
                padding-left: 10px;
            }
            img{
                height: 150px;
                width: 500px;
            }
        </style>
    </head>
    <body>
        <?php include ("bakery_header.php")?>
        <main>
            <div class="shipping-label">
                <div class="topcontent">
                    <h1 style="font-size: 40px"> USPS FIRST-CLASS PKG <h1>
                </div>
                <div class="address">
                    <div class="from-address">
                        <h1>From:</h1>
                        <p>Delightful Bakes Bakery</p>
                        <p>123 Sweet Street</p>
                        <p>Pastryville, CA 98765 United States</p>
                    </div>
                    <div class="to-address">
                        <h1>Ship To:</h1>
                        <p><span><?php echo htmlspecialchars($state);?></span></p>
                    </div>
                </div>
                <div class="package-details">
                    <h1>Package Details:</h1>
                    <p>Dimensions: <span><?php echo htmlspecialchars($dimensions);?></span></p>
                    <p>Weight: <span><?php echo htmlspecialchars($weight);?></span>lbs</p>
                </div>
                <div class="shipping-info">
                    <h1>Shipping Info:</h1>
                    <p>Shipping Company: USPS</p>
                    <p>Shipping Class: Priority Mail</p>
                    <p>Tracking Number: 9680295638</p>
                    <img src="images/barcode.png" alt="bar code">
                </div>
                <div class="order-info">
                    <h1>Order Info:</h1>
                    <p>Order Number: <span><?php echo htmlspecialchars($order_number);?></span></p>
                    <p>Ship Date: <span><?php echo htmlspecialchars($shipping_date);?></span></p>
                </div>
            </div>
        </main>
    <body> 
</html> 
