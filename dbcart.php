<?php
// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "estore";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Function to add an item to the cart
function addToCart($conn, $productId, $quantity) {
    // Check if the product exists in the database
    $sql = "SELECT * FROM products WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $productId);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows === 0) {
        return "Product not found";
    }

    // Check if the quantity is available
    $row = $result->fetch_assoc();
    if ($row["quantity"] < $quantity) {
        return "Insufficient quantity";
    }

    // Update the cart table
    $sql = "INSERT INTO cart (product_id, quantity) VALUES (?, ?) ON DUPLICATE KEY UPDATE quantity = quantity + ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("iii", $productId, $quantity, $quantity);
    $stmt->execute();

    return "Item added to the cart";
}

// Function to get the cart items
function getCartItems($conn) {
    // Retrieve the cart items from the database
    $sql = "SELECT products.id, products.name, products.price, cart.quantity FROM products JOIN cart ON products.id = cart.product_id";
    $result = $conn->query($sql);

    // Display the cart items
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "Name: " . $row["name"]. " - Price: $" . $row["price"]. " - Quantity: " . $row["quantity"]. "<br>";
        }
    } else {
        echo "Cart is empty";
    }
}

// Example usage
$productId = 1;
$quantity = 2;
$result = addToCart($conn, $productId, $quantity);
echo $result;

// Get the cart items
getCartItems($conn);
?>