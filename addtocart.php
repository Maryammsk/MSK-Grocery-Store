<?php
session_start(); // Start the session

if (isset($_POST['add_to_cart'])) {
    $product_id = $_POST['product_id'];  // The ID of the product being added
    $quantity = $_POST['quantity'];      // Quantity selected by the user

    // If the cart doesn't exist, initialize it
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = array();
    }

    // Add the product to the cart session
    $_SESSION['cart'][$product_id] = $quantity;
}

// Display cart contents
if (isset($_SESSION['cart'])) {
    foreach ($_SESSION['cart'] as $product_id => $quantity) {
        echo "Product ID: $product_id | Quantity: $quantity<br>";
    }
} else {
    echo "Your cart is empty.";
}
?>

<!-- Form to Add Product to Cart -->
<form method="POST" action="cart.php">
    <input type="hidden" name="product_id" value="1"> <!-- Example product ID -->
    <input type="number" name="quantity" value="1" min="1" required>
    <button type="submit" name="add_to_cart">Add to Cart</button>
</form>
