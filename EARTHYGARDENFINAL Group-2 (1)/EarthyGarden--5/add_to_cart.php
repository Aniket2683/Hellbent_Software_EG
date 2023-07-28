<?php
// add_to_cart.php

// add_to_cart.php

// Connect to the database
$host = 'localhost';
$dbname = 'earthygarden';
$username = 'root';
$password = '';

try {
    $conn = new PDO("mysql:host=localhost;dbname=earthygarden", 'root', '');
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if (isset($_POST['product_id'])) {
        $product_id = $_POST['product_id'];

        // Code for retrieving product details based on $product_id
        // Replace the following line with the actual code to fetch product details
        // For example, you might have something like this:
        $stmt = $conn->prepare("SELECT * FROM products WHERE product_id = :product_id");
        $stmt->bindParam(':product_id', $product_id);
        $stmt->execute();
        $product = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($product) {
            // Check if the product is already in the cart
            $stmt = $conn->prepare("SELECT * FROM cart_items WHERE product_id = :product_id");
            $stmt->bindParam(':product_id', $product_id);
            $stmt->execute();
            $existing_product = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($existing_product) {
                // If the product exists in the cart, increment its quantity and update the price
                $new_quantity = $existing_product['quantity'] + 1;
                $new_price = $product['price'] * $new_quantity;

                $stmt = $conn->prepare("UPDATE cart_items 
                                        SET quantity = :quantity, price = :price
                                        WHERE product_id = :product_id");
                $stmt->bindParam(':quantity', $new_quantity);
                $stmt->bindParam(':price', $new_price);
                $stmt->bindParam(':product_id', $product_id);
                $stmt->execute();
            } else {
                // If the product does not exist in the cart, add a new entry
                $stmt = $conn->prepare("INSERT INTO cart_items (product_id, product_name, quantity, price) 
                                        VALUES (:product_id, :product_name, :quantity, :price)");
                $stmt->bindParam(':product_id', $product_id);
                $stmt->bindParam(':product_name', $product['product_name']);
                $stmt->bindValue(':quantity', 1);
                $stmt->bindValue(':price', $product['price'], PDO::PARAM_STR);

                $stmt->execute();
            }

            // Redirect back to the product details page or any other page as needed
            header('Location: shop.php');
            exit();
        } else {
            echo "Product not found."; // Handle the case when the product_id doesn't match any product
        }
    }
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

?>
