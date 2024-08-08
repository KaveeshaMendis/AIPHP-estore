<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>TUTOO's Boutique - Checkout</title>
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
    
    <style>
        /* Custom Styles */
        .checkout {
            padding: 60px 0;
            background-color: #f8f9fa;
        }
        .checkout-inner,
        .checkout-summary {
            background: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        }
        .checkout-summary h1 {
            font-size: 28px;
            margin-bottom: 20px;
        }
        .checkout-summary p {
            font-size: 18px;
        }
        .payment-methods {
            margin-top: 20px;
        }
        .payment-method {
            margin-bottom: 15px;
        }
        .payment-content {
            display: none;
            font-size: 14px;
            margin-top: 10px;
            color: #666;
        }
        .payment-method .custom-control-input:checked ~ .payment-content {
            display: block;
        }
        .checkout-btn button {
            background-color: #007bff;
            border: none;
            color: #fff;
            font-size: 18px;
            padding: 12px 20px;
            border-radius: 5px;
            cursor: pointer;
        }
        .checkout-btn button:hover {
            background-color: #0056b3;
        }
        .footer {
            background: #333;
            color: #fff;
            padding: 60px 0;
        }
        .footer-widget h2 {
            font-size: 20px;
            margin-bottom: 20px;
        }
        .footer-widget ul {
            list-style: none;
            padding: 0;
        }
        .footer-widget ul li {
            margin-bottom: 10px;
        }
        .footer-widget ul li a {
            color: #fff;
            text-decoration: none;
        }
        .footer-widget ul li a:hover {
            text-decoration: underline;
        }
        .footer-bottom {
            background: #222;
            color: #888;
            padding: 15px 0;
        }
        .footer-bottom p {
            margin: 0;
            text-align: center;
        }
    </style>
</head>

<body>
    <?php include_once('nav-common.php'); ?>

    <!-- Breadcrumb Start -->
    <div class="breadcrumb-wrap">
        <div class="container">
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item"><a href="product-list.php">Products</a></li>
                <li class="breadcrumb-item active">Checkout</li>
            </ul>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Checkout Start -->
    <div class="checkout">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="checkout-inner">
                        <form action="dbcheckout.php" method="POST">
                            <div class="billing-address">
                                <h2>Billing Address</h2>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="first_name">First Name</label>
                                        <input class="form-control" type="text" id="first_name" name="first_name" placeholder="First Name" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="last_name">Last Name</label>
                                        <input class="form-control" type="text" id="last_name" name="last_name" placeholder="Last Name" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="email">Email</label>
                                        <input class="form-control" type="email" id="email" name="email" placeholder="Email" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="mobile">Mobile No</label>
                                        <input class="form-control" type="text" id="mobile" name="mobile" placeholder="Mobile No" required>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <label for="address">Address</label>
                                        <input class="form-control" type="text" id="address" name="address" placeholder="Address" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="country">Country</label>
                                        <select class="custom-select" id="country" name="country">
                                            <option selected>Sri Lanka</option>
                                            <option>India</option>
                                            <option>Japan</option>
                                            <option>China</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="city">City</label>
                                        <input class="form-control" type="text" id="city" name="city" placeholder="City" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="state">State</label>
                                        <input class="form-control" type="text" id="state" name="state" placeholder="State" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="zip">ZIP Code</label>
                                        <input class="form-control" type="text" id="zip" name="zip" placeholder="ZIP Code" required>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="shipto" name="shipto">
                                            <label class="custom-control-label" for="shipto">Ship to different address</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="shipping-address" id="shipping-address" style="display: none;">
                                <h2>Shipping Address</h2>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="shipping_first_name">First Name</label>
                                        <input class="form-control" type="text" id="shipping_first_name" name="shipping_first_name" placeholder="First Name">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="shipping_last_name">Last Name</label>
                                        <input class="form-control" type="text" id="shipping_last_name" name="shipping_last_name" placeholder="Last Name">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="shipping_email">Email</label>
                                        <input class="form-control" type="email" id="shipping_email" name="shipping_email" placeholder="Email">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="shipping_mobile">Mobile No</label>
                                        <input class="form-control" type="text" id="shipping_mobile" name="shipping_mobile" placeholder="Mobile No">
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <label for="shipping_address">Address</label>
                                        <input class="form-control" type="text" id="shipping_address" name="shipping_address" placeholder="Address">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="shipping_country">Country</label>
                                        <select class="custom-select" id="shipping_country" name="shipping_country">
                                            <option selected>Sri Lanka</option>
                                            <option>India</option>
                                            <option>Japan</option>
                                            <option>China</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="shipping_city">City</label>
                                        <input class="form-control" type="text" id="shipping_city" name="shipping_city" placeholder="City">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="shipping_state">State</label>
                                        <input class="form-control" type="text" id="shipping_state" name="shipping_state" placeholder="State">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="shipping_zip">ZIP Code</label>
                                        <input class="form-control" type="text" id="shipping_zip" name="shipping_zip" placeholder="ZIP Code">
                                    </div>
                                </div>
                            </div>

                            <div class="checkout-btn">
                                <button type="submit" class="btn btn-primary">Place Order</button>
                            </div>
                        </form>
                        <?php

                        if(isset($_GET['error'])) {
                            echo('
                            <div id="alertbox" class="alert alert-danger mt-3" role="alert">
                                Your order could not be placed !
                            </div>');
                        }else if(isset($_GET['success'])) {
                            echo('
                            <div id="alertbox" class="alert alert-success mt-3" role="alert">
                                "Order placed successfully! Your order number is 68545" ; 
                            </div>');
                        }
                        
                    ?>
                    
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="checkout-summary">
                        <h1>Cart Total</h1>
                        <p class="sub-total">Sub Total <span>Rs 4800.00</span></p>
                        <p class="ship-cost">Shipping Cost <span>Rs 600.00</span></p>
                        <h2>Grand Total <span>Rs 5400.00</span></h2>

                        <!-- Payment Methods Form -->
                        <div class="checkout-payment-methods">
                            <h2>Payment Methods</h2>
                            <form>
                                <div class="payment-method">
                                    <input type="radio" id="creditcard" name="payment_method" class="custom-control-input" checked required>
                                    <label for="creditcard" class="custom-control-label">Credit Card</label>
                                    <div class="payment-content">
                                        <p>Pay with your credit card.</p>
                                    </div>
                                </div>
                                <div class="payment-method">
                                    <input type="radio" id="paypal" name="payment_method" class="custom-control-input">
                                    <label for="paypal" class="custom-control-label">PayPal</label>
                                    <div class="payment-content">
                                        <p>Pay using your PayPal account.</p>
                                    </div>
                                </div>
                                <div class="payment-method">
                                    <input type="radio" id="cod" name="payment_method" class="custom-control-input">
                                    <label for="cod" class="custom-control-label">Cash on Delivery</label>
                                    <div class="payment-content">
                                        <p>Pay with cash on delivery.</p>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Checkout End -->

    <!-- Footer Start -->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 footer-widget">
                    <h2>About Us</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ac euismod velit. Nullam consectetur dolor et.</p>
                </div>
                <div class="col-lg-4 col-md-6 footer-widget">
                    <h2>Contact</h2>
                    <ul>
                        <li><a href="#">Contact Us</a></li>
                        <li><a href="#">Support</a></li>
                        <li><a href="#">Careers</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-6 footer-widget">
                    <h2>Follow Us</h2>
                    <ul>
                        <li><a href="#">Facebook</a></li>
                        <li><a href="#">Twitter</a></li>
                        <li><a href="#">Instagram</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container">
                    <p>&copy; <a href="#">TUTOO's Boutique</a>. All Rights Reserved. Designed by <a href="#">Your Name</a>.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="lib/slick/slick.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>

    <!-- Template JavaScript -->
    <script src="js/main.js"></script>
    <script>
        $(document).ready(function() {
            $('#shipto').on('change', function() {
                $('#shipping-address').slideToggle(this.checked);
            });
        });
    </script>
</body>

</html>
