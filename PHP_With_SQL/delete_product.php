<?php
print_r($_POST);

//Slide 37
require_once('datebase.php');

$product_id = filter_input(INPUT_POST, 'product_id', FILTER_VALIDATE_INT);
$category_id = filter_input(INPUT_POST, 'category_id', FILTER_VALIDATE_INT);

if($product_id != FALSE && $category_id != FALSE){
    //Delete a product
    $squery = 'DELETE FROM products WHERE productID = :product_id';
    $statement = $bd->prepare($query);
    $statement->bindValue('product_id', $product_id);
    $statement->execute();
    $statement->closeCursor();
}
?>