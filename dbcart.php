<?php
session_start();
// Enable error reporting
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "estore";
$dsn = "mysql:host=$servername;dbname=$dbname";

try {
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
    exit();
}

// Helper function to calculate the total price
function calculateTotal($cart) {
    $total = 0;
    foreach ($cart as $item) {
        $total += $item['price'] * $item['quantity'];
    }
    return $total;
}

// Initialize cart if not already in session
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
}

// Handle cart updates
if (isset($_POST['update_cart'])) {
    foreach ($_POST['quantity'] as $productId => $quantity) {
        if (isset($_SESSION['cart'][$productId])) {
            $_SESSION['cart'][$productId]['quantity'] = intval($quantity);
        }
    }
    header('Location: cart.php');
    exit();
}

// Handle item removal
if (isset($_POST['remove'])) {
    foreach ($_POST['remove'] as $productId => $value) {
        unset($_SESSION['cart'][$productId]);
    }
    header('Location: cart.php');
    exit();
}

// Handle coupon application
if (isset($_POST['apply_coupon'])) {
    $couponCode = htmlspecialchars($_POST['coupon_code']); // Sanitize input
    $stmt = $pdo->prepare("SELECT discount FROM coupons WHERE code = :code");
    $stmt->execute(['code' => $couponCode]);
    $coupon = $stmt->fetch();
    
    if ($coupon) {
        $_SESSION['discount'] = $coupon['discount'];
    } else {
        $_SESSION['discount'] = 0;
    }
    header('Location: cart.php');
    exit();
}

// Handle checkout
if (isset($_POST['checkout'])) {
    // Logic for checkout (e.g., saving order to database)
    $_SESSION['cart'] = array();
    $_SESSION['discount'] = 0;
    header('Location: checkout.php');
    exit();
}

// Calculate cart totals
$cart = $_SESSION['cart'];
$cartTotal = calculateTotal($cart);
$discount = isset($_SESSION['discount']) ? $_SESSION['discount'] : 0;
$grandTotal = $cartTotal - $discount;

// Output for debugging (remove or comment out in production)
echo '<pre>';
print_r($_SESSION['cart']);
echo 'Total: Rs. ' . $cartTotal;
echo 'Discount: Rs. ' . $discount;
echo 'Grand Total: Rs. ' . $grandTotal;
echo '</pre>';
?>
