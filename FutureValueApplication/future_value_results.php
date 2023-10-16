<?php
//filter_input helps differentiate between the GET and POST arrays for input...
//FILTER_VALIDATE_FLOAT makes the input into a float data type
$investment = filter_input(INPUT_POST, 'investment', FILTER_VALIDATE_FLOAT);
$interest_rate = filter_input(INPUT_POST, 'interest_rate', FILTER_VALIDATE_FLOAT);
$years = filter_input(INPUT_POST, 'years', FILTER_VALIDATE_INT);

//Validate Investments
//Know that you can also use <br> within quotes
$error_message = '';

if($investment === FALSE){
    $error_message .= 'Investment must be a valid number. <br>';
} else if($investment <= 0 ){
    $error_message .= 'Investment must be greater than 0. <br>';
}

//Validate Interest Rates
if($interest_rate === FALSE){
    $error_message .= 'Interest Rate must be a valid number. <br>';
} else if($interest_rate <= 0 ){
    $error_message .= 'Investment must be greater than 0. <br>';
}

//Validate Years
if($years === FALSE){
    $error_message .= 'Years must be a valid whole number <br>';
} else if($years <= 0 ){
    $error_message .= 'Years must be greater than 0. <br>';
} else if($years > 30 ){
    $error_message .= 'Years must be less than 31. <br>';
}

//If everything is okay
if($error_message != ''){
    include('Future_Value_Form.php');
    exit();
}
//Calculate the future value
$future_value = $investment;
for($index = 1; $index <= $years; $index++){
    $future_value += $future_value * $interest_rate * 0.01;
}

//Apply Formatting
//$ and % are just appended to the string
$investment_f = "$". number_format($investment, 2);
$yearly_rate_f = $interest_rate. "%";
$future_value_f = "$". number_format($future_value, 2);
?>

<!--HTML Code -->
<html>
    <head>
        <title>Future Value Calculator</title>
        <link rel= "stylesheet" href="main.css">
    </head>
    <body>
        <h1>Future Value Calculator</h1>
        <label>Investment Amount:</label>
        <span><?php echo htmlspecialchars($investment_f);?></span><br>
        <label>Interest Rate:</label>
        <span><?php echo htmlspecialchars($yearly_rate_f);?></span><br>
        <label>Number of Years:</label>
        <span><?php echo htmlspecialchars($years);?></span><br>
        <label>Future Value:</label>
        <span><?php echo htmlspecialchars($future_value_f);?></span><br>
    <body> 
</html>