<?php

$cookie_name = "userid";
$userid = filter_input(INPUT_COOKIE, $cookie_name, FILTER_VALIDATE_INT);

if(!isset($userid)){
    echo "Cookie named $cookie_name is not set!";
}else{
    echo "Cookie named $cookie_name is set.";
    echo "<br>";
    echo "filter_input value is: " . $value; 
}
?>