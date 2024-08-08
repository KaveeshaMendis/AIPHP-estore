<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>TUTOO's Boutique</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="eCommerce" name="keywords">
    <meta content="eCommerce" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Source+Code+Pro:700,900&display=swap" rel="stylesheet">

    <!-- CSS Libraries -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="lib/slick/slick.css" rel="stylesheet">
    <link href="lib/slick/slick-theme.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
<?php include_once('nav-common.php'); ?>

<!-- Breadcrumb Start -->
<div class="breadcrumb-wrap">
    <div class="container-fluid">
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item"><a href="product-list.php">Products</a></li>
            <li class="breadcrumb-item active">Cart</li>
        </ul>
    </div>
</div>
<!-- Breadcrumb End -->

<!-- Cart Start -->
<form action="dbcart.php" method="post">
    <div class="cart-page">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8">
                    <div class="cart-page-inner">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>Product</th>
                                        <th>Price</th>
                                        <th>Quantity</th>
                                        <th>Total</th>
                                        <th>Remove</th>
                                    </tr>
                                </thead>
                                <tbody class="align-middle">
                                    <!-- Example product row, repeat as needed -->
                                    <tr>
                                        <td>
                                            <div class="img">
                                                <a href="#"><img src="img/product-1.jpg" alt="Product 1"></a>
                                                <p>Mystic Meadows</p>
                                            </div>
                                        </td>
                                        <td>Rs.2600.00</td>
                                        <td>
                                            <div class="qty">
                                                <button type="button" class="btn-minus"><i class="fa fa-minus"></i></button>
                                                <input type="number" name="quantity[1]" value="1" min="1">
                                                <button type="button" class="btn-plus"><i class="fa fa-plus"></i></button>
                                            </div>
                                        </td>
                                        <td>Rs.2600.00</td>
                                        <td><button type="submit" name="remove[1]" class="btn btn-danger"><i class="fa fa-trash"></i></button></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="img">
                                                <a href="#"><img src="img/product-2.jpg" alt="Product 2"></a>
                                                <p>Ethereal Envy</p>
                                            </div>
                                        </td>
                                        <td>Rs.2200.00</td>
                                        <td>
                                            <div class="qty">
                                                <button type="button" class="btn-minus"><i class="fa fa-minus"></i></button>
                                                <input type="number" name="quantity[1]" value="1" min="1">
                                                <button type="button" class="btn-plus"><i class="fa fa-plus"></i></button>
                                            </div>
                                        </td>
                                        <td>Rs.2200.00</td>
                                        <td><button type="submit" name="remove[1]" class="btn btn-danger"><i class="fa fa-trash"></i></button></td>
                                    </tr>
                                    <!-- Repeat similar blocks for other products -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="cart-page-inner">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="coupon">
                                    <input type="text" name="coupon_code" placeholder="Coupon Code">
                                    <button type="submit" name="apply_coupon" class="btn btn-primary">Apply Code</button>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="cart-summary">
                                    <div class="cart-content">
                                        <h1>Cart Summary</h1>
                                        <p>Sub Total<span>Rs.4800.00</span></p>
                                        <p>Shipping Cost<span>Rs.600.00</span></p>
                                        <h2>Grand Total<span>Rs.5400.00</span></h2>
                                    </div>
                                    <div class="cart-btn">
                                        <button type="submit" name="update_cart" class="btn btn-warning">Update Cart</button>
                                        <button type="submit" name="checkout" class="btn btn-success">Checkout</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
<!-- Cart End -->

<!-- Footer Start -->
<div class="footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="footer-widget">
                    <h2>Get in Touch</h2>
                    <div class="contact-info">
                        <p><i class="fa fa-map-marker"></i>TUTOO's Boutique, Sri Lanka</p>
                        <p><i class="fa fa-envelope"></i>tutoosboutique@example.com</p>
                        <p><i class="fa fa-phone"></i>077-556-4614</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="footer-widget">
                    <h2>Follow Us</h2>
                    <div class="contact-info">
                        <div class="social">
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="footer-widget">
                    <h2>Company Info</h2>
                    <ul>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Terms & Condition</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="footer-widget">
                    <h2>Purchase Info</h2>
                    <ul>
                        <li><a href="#">Payment Policy</a></li>
                        <li><a href="#">Shipping Policy</a></li>
                        <li><a href="#">Return Policy</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row payment align-items-center">
            <div class="col-md-6">
                <div class="payment-method">
                    <h2>We Accept:</h2>
                    <img src="img/payment-method.png" alt="Payment Method">
                </div>
            </div>
            <div class="col-md-6">
                <div class="payment-security">
                    <h2>Secured By:</h2>
                    <img src="img/godaddy.svg" alt="Payment Security">
                    <img src="img/norton.svg" alt="Payment Security">
                    <img src="img/ssl.svg" alt="Payment Security">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->

<!-- Footer Bottom Start -->
<div class="footer-bottom">
    <div class="container">
        <div class="row">
            <div class="col-md-6 copyright">
                <p>Copyright &copy; <a href="#">TUTOO's Boutique</a>. All Rights Reserved</p>
            </div>

            <div class="col-md-6 template-by">
                <p>Template By <a href="#">YourCompany</a></p>
            </div>
        </div>
    </div>
</div>
<!-- Footer Bottom End -->

<!-- Back to Top -->
<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/slick/slick.min.js"></script>

<!-- Template Javascript -->
<script src="js/main.js"></script>
</body>
</html>
