<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        // Get the data from the form
        $full_name = $_POST["full_name"];
        $email_address = filter_input(INPUT_POST, "email_address", FILTER_VALIDATE_EMAIL);

        if($email_address === FALSE){
            header("Location: course_description.php?error=invalid_email");
            exit;
        }
    }
?>

