<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];

    // Establish a connection to the database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "estore";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Check if the email already exists in the newsletter table
    $sql = "SELECT COUNT(*) AS count FROM newsletter WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();
    $count = $row['count'];

    if ($count > 0) {
        // Handle the duplicate entry error
        header("Location: index.php?error");
        exit();
    } else {
        // Insert the email into the newsletter table
        $sql = "INSERT INTO newsletter (email) VALUES (?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $email);
        $stmt->execute();

        // Display a success message
        header("Location: index.php?success");
    exit();
    }

    $stmt->close();
    $conn->close();
}
?>