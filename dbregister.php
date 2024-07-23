<?php
// Enable error reporting
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Establish a connection to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "estore";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve data submitted by the form
$email = $_POST['email'];
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$phone = $_POST['phone'];
$address = $_POST['address'];
 $password = $_POST['password'];
$gender = $_POST['gender'];

// Prepare and execute the SQL query to insert the data into the customer table
$sql = "INSERT INTO customer (email, firstName, lastName, phone, address, password, gender) VALUES ('$email', '$firstName', '$lastName', '$phone', '$address', '$password', '$gender')";

try {
    if ($conn->query($sql) === TRUE) {
        header('Location: login.php');
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} catch (mysqli_sql_exception $e) {
    if (strpos($e->getMessage(), 'Duplicate entry') !== false) {
        header('Location: register.php?error');
        exit();
    } else {
        echo "Error: " . $e->getMessage();
    }
}

// Close the database connection
$conn->close();
?>