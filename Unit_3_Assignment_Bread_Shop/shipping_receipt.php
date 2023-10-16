<?php
//Name: Raphael Holganza Course: IT 202-003 Date: October 6, 2023 Email: rmh38@njit.edu Assignment: Unit 3 Assignment

//Variables
$zip_pattern = '/^\d{5}(-\d{4})?$/';
$validStates = array(
    'AL', 'AK', 'AZ', 'AR', 'CA', 'CO', 'CT', 'DE', 'FL', 'GA',
    'HI', 'ID', 'IL', 'IN', 'IA', 'KS', 'KY', 'LA', 'ME', 'MD',
    'MA', 'MI', 'MN', 'MS', 'MO', 'MT', 'NE', 'NV', 'NH', 'NJ',
    'NM', 'NY', 'NC', 'ND', 'OH', 'OK', 'OR', 'PA', 'RI', 'SC',
    'SD', 'TN', 'TX', 'UT', 'VT', 'VA', 'WA', 'WV', 'WI', 'WY'
);

//filter_input helps differentiate between the GET and POST arrays for input...
$length = $_POST['length'];
$width = $_POST['width'];
$height = $_POST['height'];
$weight = $_POST['weight'];
$state = $_POST["state"];
$city = $_POST["city"];
$street_address = $_POST["street_address"];
$zip_code = $_POST['zip_code'];
$shipping_date = $_POST["shipping_date"];
$order_number = $_POST["order_number"];
$fullname = $_POST["fullname"];

//Error Message
$error_message = '';

//Validate Dimensions if they are INTS and if they are below 36 in
if($length > 36){
    $error_message .= 'Length must be below 36 inches. ';
}else if($width > 36){
    $error_message .= 'Width must be below 36 inches. ';
}else if($height > 36){
    $error_message .= 'Height must be below 36 inches. ';
}

//Validate Weight
if($weight === FALSE or $weight > 150){
    $error_message .= 'Weight must be no more than 150 lbs. ';
}

//Validate State and Zip Code
if(!in_array($state, $validStates)){
    $error_message .= 'Must enter in a valid US state in abbreviated form. ';
}
if(!preg_match($zip_pattern, $zip_code)){
    $error_message .= 'Must enter in a valid zip code. ';
}

//If everything is not okay
if($error_message != ''){
    include('shipping.php');
    exit();
}

//Formatting State and Dimensions
$state .= ", " . $city . $zip_code;
$dimensions = $length . "\" X " . $width . "\" X " . $height . "\"";

//If everything is okay
include('shipping_report.php');
exit();
?>

