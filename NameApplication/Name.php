<?php
    // get the data from the request and store it into variables and an array
    $first_name = $_GET['first_name'];
    $last_name = $_GET['last_name'];
    $full_name = "$first_name $last_name"; //Combining two string variables use double quotes
    $nf = number_format(12345.674, 2);
?>

<!DOCTYPE HTML> <!-- HTML Segment-->
<html>
    <head>
        <title>Name Test</title>
        <link rel="stylesheet" href="main.css">
    </head>
    <body>
        <h2>Welcome</h2>
        <p>First name: <?php echo $first_name; ?></p>
        <p>Last name: <?php echo $last_name; ?></p>
        <p>Full name: <?php echo $full_name; ?></p>
        <p>Example of number formatting: <?php echo $nf ?></p>
    </body>
</html>

<!--You can also use POST instead of GET if you don't want to 
show the parameters in the URL unlike GET -->

