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
        .dash-card {
            transition: transform 0.3s, box-shadow 0.3s;
        }
        .dash-card:hover {
            transform: scale(1.05);
            box-shadow: 0 4px 8px rgba(0,0,0,0.2);
        }
        .hero-text {
            font-size: 2rem;
            font-weight: bold;
        }
        .dash-card-text {
            margin-top: 10px;
            font-size: 1.2rem;
            font-weight: bold;
        }
    </style>
</head>

<body>

    <?php include_once('nav-admin.php'); ?>

    <div class="container-md text-center mt-5" style="max-width: 900px;">
        <div class="mb-4 hero-text">Admin Dashboard</div>

        <div class="row justify-content-center">

            <a class="col-12 col-md-3 dash-card card p-3 m-2 rounded-5" href="checkoutlist.php">
                <img src="../img/checkout.jpg" class="card-img-top" alt="Checkout List">
                <h3 class="dash-card-text">Checkout List</h3>
            </a>
            <a class="col-12 col-md-3 dash-card card p-3 m-2 rounded-5" href="memberlist.php">
                <img src="../img/memberslist.jpg" class="card-img-top" alt="Members List">
                <h3 class="dash-card-text">Members List</h3>
            </a>
            <a class="col-12 col-md-3 dash-card card p-3 m-2 rounded-5" href="newsletterlist.php">
                <img src="../img/newsletterlist.jpg" class="card-img-top" alt="Members List">
                <h3 class="dash-card-text">NewsLetter List</h3>
            </a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-GBBBPp6F/IS0vK6MQD6yQ6zGfyZ8RjyfsS5Uffu3ITL7s2Lx1hvvzCBBVZdMSK/k" crossorigin="anonymous"></script>
</body>
</html>
