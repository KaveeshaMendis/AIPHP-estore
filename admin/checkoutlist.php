<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>TUTOO's Boutique</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="eCommerce">
    <meta name="description" content="eCommerce">

    <!-- Favicon -->
    <link href="../img/favicon.ico" rel="icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Source+Code+Pro:700,900&display=swap" rel="stylesheet">

    <!-- CSS Libraries -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="../lib/slick/slick.css" rel="stylesheet">
    <link href="../lib/slick/slick-theme.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="../css/style.css" rel="stylesheet">

    <style>
        body {
            font-family: 'Open Sans', sans-serif;
            background-color: #f0f2f5;
            color: #333;
            margin: 0;
        }
        .container {
            background-color: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            margin-top: 30px;
        }
        .hero-text {
            font-family: 'Source Code Pro', monospace;
            color: #FF6F61;
            margin-bottom: 20px;
        }
        .table {
            margin-top: 20px;
        }
        .table thead th {
            background-color: #FF6F61;
            color: white;
            text-align: center;
        }
        .table tbody tr {
            transition: background-color 0.3s;
        }
        .table tbody tr:hover {
            background-color: #f8f9fa;
        }
        .table td, .table th {
            vertical-align: middle;
        }
        @media (max-width: 768px) {
            .table-responsive {
                overflow-x: auto;
            }
        }
    </style>
</head>
<body>

<header>
<?php include_once('nav-admin.php'); ?>
</header>

<main>
    <div class="container mt-5">
        <h1 class="hero-text mb-4 text-center">Newsletter List</h1>
        <table class="table table-bordered table-striped mt-5">
            <thead class="thead-dark">
                <tr>
                    <th>Order Number</th>
                    <th>Order Placed Date</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Mobile</th>
                    <th>Address</th>
                    <th>Country</th>
                    <th>City</th>
                    <th>State</th>
                    <th>Zip</th>
                    <th>Payment Method</th>
                </tr>
            </thead>
            <tbody>
    <?php
    // Connect to the MySQL database
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

    // SQL query to select the desired columns from the "newsletter" table
    $sql = "SELECT order_number, order_placed_date, first_name, last_name, email, mobile, address, country, city, state, zip, payment_method FROM Orders WHERE order_number IS NOT NULL";
    // Prepare and execute the query
    if ($stmt = $conn->prepare($sql)) {
        $stmt->execute();
        $stmt->bind_result($order_number, $order_placed_date, $first_name, $last_name, $email, $mobile, $address, $country, $city, $state, $zip, $payment_method);
        // Fetch the rows
        while ($stmt->fetch()) {
            echo "<tr>";
            echo "<td>" . htmlspecialchars($order_number) . "</td>";
            echo "<td>" . htmlspecialchars($order_placed_date) . "</td>";
            echo "<td>" . htmlspecialchars($first_name) . "</td>";
            echo "<td>" . htmlspecialchars($last_name) . "</td>";
            echo "<td>" . htmlspecialchars($email) . "</td>";
            echo "<td>" . htmlspecialchars($mobile) . "</td>";
            echo "<td>" . htmlspecialchars($address) . "</td>";
            echo "<td>" . htmlspecialchars($country) . "</td>";
            echo "<td>" . htmlspecialchars($city) . "</td>";
            echo "<td>" . htmlspecialchars($state) . "</td>";
            echo "<td>" . htmlspecialchars($zip) . "</td>";
            echo "<td>" . htmlspecialchars($payment_method) . "</td>";
            echo "</tr>";
        }
        $stmt->close();
    } else {
        echo "<tr><td colspan='2' class='text-center'>Error: " . $conn->error . "</td></tr>";
    }

    // Close the connection
    $conn->close();
    ?>
</tbody>

        </table>
    </div>
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
