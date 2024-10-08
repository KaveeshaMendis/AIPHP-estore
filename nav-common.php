<!-- Top bar Start -->
<div class="top-bar">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <i class="fa fa-envelope"></i>
                support@email.com
            </div>
            <div class="col-sm-6 text-right">
                <i class="fa fa-phone-alt"></i>
                077-556-4614
            </div>
        </div>
    </div>
</div>
<!-- Top bar End -->

<!-- Nav Bar Start -->
<div class="nav">
    <div class="container-fluid">
        <nav class="navbar navbar-expand-md bg-dark navbar-dark">
            <a href="#" class="navbar-brand">MENU</a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav mr-auto">
                    <a href="index.php" class="nav-item nav-link <?php if ($current_page == 'index.php') echo 'active'; ?>">Home</a>
                    <a href="product-list.php" class="nav-item nav-link <?php if ($current_page == 'product-list.php') echo 'active'; ?>">Products</a>
                    <a href="product-detail.php" class="nav-item nav-link <?php if ($current_page == 'product-detail.php') echo 'active'; ?>">Product Detail</a>
                    <a href="cart.php" class="nav-item nav-link <?php if ($current_page == 'cart.php') echo 'active'; ?>">Cart</a>
                    <a href="checkout.php" class="nav-item nav-link <?php if ($current_page == 'checkout.php') echo 'active'; ?>">Checkout</a>
                    <a href="contact.php" class="nav-item nav-link <?php if ($current_page == 'contact.php') echo 'active'; ?>">Contact Us</a>
                    </div>
                </div>
                <div class="navbar-nav ml-auto">
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">User Account</a>
                        <?php if (isset($_SESSION['customerloggedin']) && $_SESSION['customerloggedin'] == true): ?>
                            <div class="dropdown-menu">
                                <a href="logout.php" class="dropdown-item">Logout</a>
                            </div>
                        <?php else: ?>
                            <div class="dropdown-menu">
                                <a href="login.php" class="dropdown-item">Login</a>
                                <a href="register.php" class="dropdown-item">Register</a>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</div>
<!-- Nav Bar End -->

<!-- Bottom Bar Start -->
<div class="bottom-bar">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-md-3">
                <div class="logo">
                    <a href="index.php">
                        <img src="img/logo.jpg" alt="Logo" class="img-fluid">
                    </a>
                </div>
            </div>
            <div class="col-md-6">
                <form action="search.php" method="get" class="search">
                    <input type="text" name="query" placeholder="Search" aria-label="Search">
                    <button type="submit"><i class="fa fa-search"></i></button>
                </form>
            </div>
            <div class="col-md-3">
                <div class="user">
                    <a href="wishlist.php" class="btn wishlist" aria-label="Wishlist">
                        <i class="fa fa-heart"></i>
                    </a>
                    <a href="cart.php" class="btn cart" aria-label="Cart">
                        <i class="fa fa-shopping-cart"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Bottom Bar End -->
