<?php
session_start();

// Enable error reporting
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$uname = $_POST['email'];
$pass = $_POST['pass'];

// Handling the Admin Login to Access UsersList.php 
if ($uname == "admin@gmail.com" && $pass == "admin123") {
    $_SESSION['adminloggedin'] = true;
    header('Location: admin/index.php');
    exit();
}
    

// Establish a connection to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "estore";

// Prepare and execute the SQL query to fetch the user details
$conn = new mysqli($servername, $username, $password, $dbname);
$stmt = $conn->prepare("SELECT * FROM customer WHERE email = ?");
$stmt->bind_param("s", $uname);
$stmt->execute();
$result = $stmt->get_result();

// Check if the user exists
if ($result->num_rows === 1) {
    $user = $result->fetch_assoc();
    // Verify the password
    if (strtolower($user['password']) === strtolower($pass)) {
        // Redirect to the desired page
        $_SESSION['customerloggedin'] = $uname;
        header("Location: wishlist.php");
        exit();
    } else {
        // Invalid password
        header("Location: login.php?error");
        exit();
    }
} else {
    // Invalid email or user does not exist
    header("Location: login.php?error");
    exit();
}

// Close the database connection
$stmt->close();
$conn->close();
?>