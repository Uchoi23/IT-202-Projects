<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $cookie_name = "userid";
    $cookie_value = "87";
    $expire = 60 * 60 * 24 * 7;
    $path = "/"; //You can have a path here

    setcookie($cookie_name, $cookie_value, time() + $expire);
    echo "Cookie named $cookie_name is set!";
    ?>
</body>
</html>
