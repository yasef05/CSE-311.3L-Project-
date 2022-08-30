<?php

$db = mysqli_connect("localhost", "root", "", "project");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commerce Website</title>

    <!-- Link our CSS file -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!-- Navbar -->
    <section class="navbar">
        <div class="container">
            <div class="logo">
                <a href="http://www.northsouth.edu/" title="Logo">
                    <img src="images/logo.png" alt="Website Logo" class="img-responsive">
                </a>
            </div>

            <div class="navbar text-right">
                <ul>
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="products.php">Products</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li>
                </ul>
            </div>

            <div class="clearfix"></div>
        </div>
    </section>
    <!-- Navbar -->

    <!-- Search -->
    <!-- <section class="product-search text-center">
        <div class="container">
            
            <form action="product-search.php" method="POST">
                <input type="search" name="search" placeholder="eg. shirts" required>
                <input type="submit" name="submit" value="Search" class="btn btn-primary">
            </form>

        </div>
    </section> -->
    <!-- Search -->

    <!-- Order Form -->
    <section class="product-order">
        <div class="container">
            
            <h2 class="text-center text-black">Fill this form to confirm your order.</h2>

            <form action="insert.php" method ="post" class="order">
                <fieldset class="order-fieldset">
                    <legend>Selected Product</legend>

                    <div class="product-img">
                        <img src="images/men-tshirt.jpg" alt="Boy in a t-shirt" class="img-responsive img-curve">
                    </div>
    
                    <div class="product-desc">
                        <h3>Product Name</h3>
                        <p class="product-price">BDT 400</p>

                        <div class="order-label">Quantity</div>
                        <input type="number" name="qty" class="input-responsive" value="1" required>
                        
                    </div>

                </fieldset>
                
                <fieldset class="order-fieldset">
                    <legend>Delivery Details</legend>
                    <div class="order-label">Full Name</div>
                    <input type="text" name="full-name" required placeholder="Full Name" class="input-responsive" required>

                    <div class="order-label">Phone Number</div>
                    <input type="tel" name="contact" required placeholder="01XXXXXXXXX" class="input-responsive" required>

                    <div class="order-label">Email</div>
                    <input type="email" name="email" required placeholder="example@gmail.com" class="input-responsive" required>

                    <div class="order-label">Address</div>
                    <textarea name="address" rows="10" required placeholder="H# Rd# ...." class="input-responsive" required></textarea>

                    <input type="submit" name="submit" value="Confirm Order" class="btn btn-primary">
                </fieldset>

            </form>

        </div>
    </section>
    <!-- Order Form -->

    <!-- Social -->
    <section class="social">
        <div class="container text-center">
            <ul>
                <li>
                    <a href="#"><img src="https://img.icons8.com/fluent/50/000000/facebook-new.png"/></a>
                </li>
                <li>
                    <a href="#"><img src="https://img.icons8.com/fluent/48/000000/instagram-new.png"/></a>
                </li>
                <li>
                    <a href="#"><img src="https://img.icons8.com/fluent/48/000000/twitter.png"/></a>
                </li>
            </ul>
        </div>
    </section>
    <!-- Social -->

    <!-- Footer -->
    <section class="footer">
        <div class="container text-center">
            <p>All rights reserved. Designed By <a href="#">Group-11</a></p>
        </div>
    </section>
    <!-- Footer -->

</body>
</html>