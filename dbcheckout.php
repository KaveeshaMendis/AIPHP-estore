<?php
// Database configuration
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "estore";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Function to sanitize and validate input
function sanitize_input($data) {
    global $conn; // Use global connection variable
    return mysqli_real_escape_string($conn, trim($data));
}

// Retrieve and sanitize form data
$order_number = rand(1000, 9999);
$first_name = sanitize_input($_POST['first_name'] ?? '');
$last_name = sanitize_input($_POST['last_name'] ?? '');
$email = sanitize_input($_POST['email'] ?? '');
$mobile = sanitize_input($_POST['mobile'] ?? '');
$address = sanitize_input($_POST['address'] ?? '');
$country = sanitize_input($_POST['country'] ?? '');
$city = sanitize_input($_POST['city'] ?? '');
$state = sanitize_input($_POST['state'] ?? '');
$zip = sanitize_input($_POST['zip'] ?? '');
$payment_method = sanitize_input($_POST['payment_method'] ?? '');

$shipto = isset($_POST['shipto']) ? 1 : 0;

// Prepare SQL query based on shipping address
if ($shipto == 0) {
    // No shipping address, use billing address
    $stmt = $conn->prepare("INSERT INTO orders (order_number, first_name, last_name, email, mobile, address, country, city, state, zip, payment_method) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("issssssssss", $order_number, $first_name, $last_name, $email, $mobile, $address, $country, $city, $state, $zip, $payment_method);
} else {
    // Shipping address fields should be retrieved similarly
    $shipping_first_name = sanitize_input($_POST['shipping_first_name'] ?? $first_name);
    $shipping_last_name = sanitize_input($_POST['shipping_last_name'] ?? $last_name);
    $shipping_email = sanitize_input($_POST['shipping_email'] ?? $email);
    $shipping_mobile = sanitize_input($_POST['shipping_mobile'] ?? $mobile);
    $shipping_address = sanitize_input($_POST['shipping_address'] ?? $address);
    $shipping_country = sanitize_input($_POST['shipping_country'] ?? $country);
    $shipping_city = sanitize_input($_POST['shipping_city'] ?? $city);
    $shipping_state = sanitize_input($_POST['shipping_state'] ?? $state);
    $shipping_zip = sanitize_input($_POST['shipping_zip'] ?? $zip);

    // Prepare SQL query for shipping address
    $stmt = $conn->prepare("INSERT INTO orders (order_number, first_name, last_name, email, mobile, address, country, city, state, zip, payment_method) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("issssssssss", $order_number, $shipping_first_name, $shipping_last_name, $shipping_email, $shipping_mobile, $shipping_address, $shipping_country, $shipping_city, $shipping_state, $shipping_zip, $payment_method);
}

// Execute the statement
if ($stmt->execute()) {
    // Execution of the prepared statement was successful
    header("Location: checkout.php?success");
    exit();
} else {
    // Execution of the prepared statement failed
    header("Location: checkout.php?error");
exit();
}

// Close statement and connection
$stmt->close();
$conn->close();
?>
