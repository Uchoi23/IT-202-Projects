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
    <title>Bread Store Landing Page</title>
    <style>
        body{
            background-image: url("images/imagerender.png");
            background-size: cover;
            background-repeat: no-repeat;
        }
        .bread{
            margin: 18px;
            padding: 5px;
            width: 250px;
            border-width: 5px;
            border-style: solid;
            border-color: #D3D3D3;
        }
        #Bread_Images figcaption{
            font-family: 'Karla', sans-serif;
            padding-left: 20px;
            color:#D3D3D3;
        }
    </style>
</head>
<body>
    <?php include ("bakery_header.php")?>
    <main>
        <section id = "Description">
            <p> "Crafting delight, one loaf at a time, 
                with handcrafted and hand-baked breads 
                from the heart. We use only the freshest 
                ingredients to ensure every bite is a taste 
                of perfection."</p>
        </section>
        <div class = "AboutUsSection">
            <section id = "AboutUs">
                <h1 style="font-size: 300%; margin-right: 1px;"><u>About Us</u></h1>
                <p> Established in the heart of our community in 2014, 
                    we've been serving delectable handcrafted pastries 
                    and artisanal bread with passion and dedication. 
                    Our journey began with a simple goal: to create baked 
                    goods that warm both the heart and soul. Over the years, 
                    we've perfected our recipes and embraced the artistry of 
                    traditional baking, offering a wide range of treats from flaky 
                    croissants to mouthwatering cakes. With every bite, we invite you 
                    to savor the essence of our bakery's history and dedication to quality, 
                    making each visit a sweet and memorable experience.</p>
            </section>
            <img src ="images/manbread.jpeg" alt="about us image" id="manbread">
        </div>
        <div class = "Products">
            <section id = "WhatWeServe">
                <h1 style="font-size: 300%; margin-right: 1px;"><u>What We Serve</u></h1>
                <p> At Estelle Darcy, we offer a delightful array of artisan breads. 
                    Our classic Sourdough Boule, crafted from a long-fermented starter, 
                    boasts a chewy crust and tangy crumb, perfect for sandwiches or toast. 
                    The Whole Wheat Walnut Bread, rich in flavor and texture, is ideal for 
                    pairing with cheese or enjoying as a wholesome snack. Our French Baguette,
                    with a crispy exterior and soft interior, is a timeless choice for traditional 
                    sandwiches. For a sweet touch, savor our Cinnamon Raisin Swirl Bread, perfect 
                    for French toast or spreads. We take pride in our diverse bread selection, 
                    crafted with care and the finest ingredients. Visit us to experience the magic 
                    of freshly baked bread!</p>
            </section>
            <section id="Bread_Images">
                <img src="images/Boule.jpeg" alt="boule bread" class="bread">
                <img src="images/walnut.jpeg" alt="walnut bread" class="bread">
                <img src="images/cinnamon.jpeg" alt="cinnamon bread" class="bread">
                <img src="images/baguette.jpeg" alt="baguette bread" class="bread">
            </section>
        </div>
    </main>
    <?php include ("bakery_footer.php")?>
</body>
</html>