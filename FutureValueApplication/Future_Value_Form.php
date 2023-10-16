<?php
//set default value of variables for initial page load
//checks if there is any variables that are not initialized yet
if (!isset($investment)) { $investment = ''; }
if(!isset($interest_rate)) { $$interest_rate = ''; }
if(!isset($years)) { $years = ''; }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Future Value Calculator</title>
    <link rel= "stylesheet" href= "main.css">
</head>
<body>
    <main>
        <h1>Future Value Calculator</h1>
         <!-- PHP error message -->
         <?php if(!empty($error_message)){ ?>
            <p id= "error" style= "color: red;">
                <?php echo htmlspecialchars($error_message); ?>
            </p>
        <?php } ?> <!-- php tag is here to close the curly brace -->
         <!-- Form Action Part -->
        <form action= "future_value_results.php" method= "post">
        <section id = "Input_Details">
            <!-- Investment Amount label and input type-->
            <label>Investment Amount:</label>
            <input type = "text" name= "investment" 
                value= "<?php echo htmlspecialchars($investment); ?>">
            <br> <!-- Yearly Interst Rate label and input type-->
            <label>Yearly Interest Rate:</label>
            <input type = "text" name= "interest_rate" 
                value= "<?php echo htmlspecialchars($interest_rate); ?>">
            <br> <!-- Number of Years label and input type-->
            <label>Years:</label>
            <input type = "text" name= "years" 
                value= "<?php echo htmlspecialchars($years); ?>">
            <br>
        </section>
        <!--Calculate-->
        <section id= "Button">
            <label>&nbsp;</label>
            <input type= "submit" value= "Calculate">
            <br>
         </section>
</body>
</html>