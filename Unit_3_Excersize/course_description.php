<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styling.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inclusive+Sans&display=swap" rel="stylesheet">
    <title>Originuim Applications (OA 356)</title>
</head>
<body>
    <?php include ("header.php")?> <!-- including the header -->
    <main>
        <h1>Intro to Originimum Arts Theory (OA 301)</h1>
        <nav id = "CourseMaterials"> <!-- Nav Section -->
            Buy the course textbook here: <a href = "#"> Course Text Book </a>
        </nav>
        <section id = "Course Description">
            <p id = "CourseParagraph">Course Description: Embark on an enlightening journey through the 
            mystical realm of <em> Originium Arts Theory</em> established by <em>Rhine Lab LLC</em>.
            This immersive course offers a profound exploration of Originium, 
            its enigmatic properties, and the profound artistry of harnessing 
            its energies for those who are interested in originium arts and it's 
            practical applications.</p>
        </section>
        <form action= "SignedUp.php" method= "post">
        <section id = "Input Details">
            <!-- Full Name -->
            <label>Full Name:</label>
            <input type = "text" id= "full name" name= "full_name" 
                value= "<?php echo htmlspecialchars($full_name); ?>">
            <br> <!-- Email Address -->
            <br>
            <label>Email Address:</label>
            <input type = "text" id= "email address" name= "email_address"
                value= "<?php echo htmlspecialchars($email_address); ?>">
            <br>
            <br>
            <div class= "Submit Button"><input type= "submit" id= "submit button" value= "Sign Me Up!"></div>
            <?php
            // Check if an error message is present in the URL
            if (isset($_GET["error"]) && $_GET["error"] == "invalid_email"){
                echo "<p style='color: red;'>Please enter a valid email address</p>";
            }
            ?>
        </section>
    </main> 
    <?php include ("footer.php")?> <!-- including the footer -->
</body>
</html>