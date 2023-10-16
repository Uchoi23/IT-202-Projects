<?php // Slide 24 in PHP and mySQL: Chapter 04
    $local_dsn = 'mysql:host=localhost;port=3306;dbname=my_guitar_shop1';
    $local_username = 'mgs_user';
    $local_password = 'pa55word'; 
    
    //Delcare NJIT credential
    $njit_dsn = 'mysql:host=mysql01.arcs.njit.edu;port=3306;dbname=rmh38';
    $njit_username = 'rmh38';
    $njit_password = 'G3dx48upWs$';

    //Change these 3 variables for different server configuration 
    $dsn = $njit_dsn;
    $username = $njit_username;
    $password = $njit_password;

    try{
        $db = new PDO($dsn, $username, $password); //PDO is an SQL object that has 3 parameters
        echo '<p> You are connected to the database </p>';
    }
    catch(PDOException $exception){ //Catches an error if PDO fails to connect to the database
        $error_message = $exception->getMessage();
        include('database_error.php');
        exit();
    }

?>