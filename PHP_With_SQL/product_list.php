<?php //Slide 26
    require_once('database.php');
    // Get category ID
    $category_id = filter_input(INPUT_GET, 'category_id', FILTER_VALIDATE_INT);
    if ($category_id == NULL || $category_id == FALSE){
        $category_id = 1;
    }

    // Get name for selected category
    //We create an SQL query to fetch data from a "categories" table based on a category ID.
    //The :category_id placeholder represents the value to be provided later.
    $queryCategory = 'SELECT * FROM categories WHERE categoryID = :category_id';

    //We prepare the SQL query for execution, creating a safe, reusable statement.
    $statement1 = $db->prepare($queryCategory);
    
    //We bind the actual value of $category_id to the :category_id placeholder securely.
    $statement1->bindValue(':category_id', $category_id);

    //We execute the prepared query, fetching the category data from the database.
    
    $statement1->execute();
    //We store the fetched data in the $category variable as an associative array.
    $category = $statement1->fetch();

    //We extract the "categoryName" from the fetched data, storing it in $category_name.
    $category_name = $category['categoryName'];

    //We close the cursor associated with the prepared statement for resource management.
    $statement1->closeCursor();
  
    // Get name for selected category

    //Get all categories
    $queryAllCategories = 'SELECT * FROM categories ORDER BY categoryID';
    $statement2 = $db->prepare($queryAllCategories);
    $statement2->execute();
    $categories = $statement2->fetchAll();
    $statement2->closeCursor();
  
    //Printing loop for arrays in SQL
    /*
    echo "<pre>";
    print_r($categories);
    echo "</pre>";
    */

    //Getting Products for our Selected Category
    $queryProducts = 'SELECT * FROM products 
        WHERE categoryID = :category_id ORDER BY productID';
    $statement3 = $db->prepare($queryProducts);
    $statement3->bindValue(':category_id', $category_id);
    $statement3->execute(); //returns all of the product information
    $products = $statement3->fetchAll();
    $statement3->closeCursor();
?>


<!-- HTML for showing the products on the web page -->
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Guitar Shop</title>
    <link rel="stylesheet" href="main.css" />
</head>
<body>
    <main>
        <h1 style="font-size: 30px;">Product List<h1>
        <aside>
            <h2 style="font-size: 20px;">Categories</h2>
            <nav>
                <ul>
                    <?php foreach ($categories as $category): ?>
                    <li>
                        <a href="?category_id=<?php
                            echo $category['categoryID'];?>">
                        <?php echo $category['categoryName']; ?></a>
                    </li>
                    <?php endforeach; ?>
                </ul>
            <nav>
        </aside>
        <!-- Slide 29: Echo the categories -->
        <section id="Table of Contents">
            <h2><?php echo $category_name; ?></h2>
            <table>
                <tr>
                    <th style="font-size: 20px;">Code</th>
                    <th style="font-size: 20px;">Name</th>
                    <th style="font-size: 20px;">Price</th>
                </tr>
                <?php foreach ($products as $product): ?>
                    <tr>
                        <td><?php echo $product['productCode']; ?></td>
                        <td><?php echo $product['productName']; ?></td>
                        <td><?php echo $product['listPrice']; ?></td>
                        <td>
                            <!-- Slide 36 (delete modification) -->
                            <form action="delete_product.php" methos="post">
                                <input type="hidden" name="product_id"
                                    value="<?php echo $product['productID']; ?>" />
                                <input type="hidden" name="category_id"
                                    value="<?php echo $product['categoryID']; ?>" />
                                <input type="submit" value="Delete"/>
                            </form>
                        </td>
                    <tr>
                <?php endforeach; ?>
            </table>
        </section>
    </main>
</body>
</html>