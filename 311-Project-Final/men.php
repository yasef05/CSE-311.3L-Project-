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
    <section class="product-search text-center">
        <div class="container">
            
            <form action="product-search.php" method="POST">
                <input type="search" name="search" placeholder="eg. shirts" required>
                <input type="submit" name="submit" value="Search" class="btn btn-primary">
            </form>

        </div>
    </section>
    <!-- Search -->

    <!-- Product List -->
    <section class="product">
        <div class="container">
            <h2 class="text-center">Men</h2>

            <div class="product-box">
                <div class="product-img">
                    <img src="images/men-tshirt.jpg" alt="Man in a black T-Shirt" class="img-responsive img-curve">
                </div>

                <div class="product-desc">
                    <h4>Black T-Shirt</h4>
                    <p class="product-price">400 BDT</p>
                    <p class="product-detail">
                        Comfy black t-shirt for casual wear.
                    </p>
                    <br>

                    <a href="order.php" class="btn btn-primary">Order Now</a>
                </div>
            </div>

            <div class="product-box">
                <div class="product-img">
                    <img src="images/stripped-tshirt.jpg" alt="Man in a black T-Shirt" class="img-responsive img-curve">
                </div>

                <div class="product-desc">
                    <h4>Red & Black Stripped T-Shirt</h4>
                    <p class="product-price">500 BDT</p>
                    <p class="product-detail">
                        Comfy stripped t-shirt for casual wear.
                    </p>
                    <br>

                    <a href="order.php" class="btn btn-primary">Order Now</a>
                </div>
                
            </div>

            <div class="product-box">
                <div class="product-img">
                    <img src="images/men-flannel.jpg" alt="Man in a black & yellow flannel" class="img-responsive img-curve">
                </div>

                <div class="product-desc">
                    <h4>Black & Yellow Flannel</h4>
                    <p class="product-price">1000 BDT</p>
                    <p class="product-detail">
                        Cozy Flannel for all types of weather.
                    </p>
                    <br>

                    <a href="order.php" class="btn btn-primary">Order Now</a>
                </div>
            </div>
            
            <div class="product-box">
                <div class="product-img">
                    <img src="images/stripped-tshirt.jpg" alt="Man in a black T-Shirt" class="img-responsive img-curve">
                </div>

                <div class="product-desc">
                    <h4>Red & Black Stripped T-Shirt</h4>
                    <p class="product-price">500 BDT</p>
                    <p class="product-detail">
                        Comfy stripped t-shirt for casual wear.
                    </p>
                    <br>

                    <a href="order.php" class="btn btn-primary">Order Now</a>
                </div>
            
        </div>
        <div class="clearfix"></div>

    </section>
    <!-- Product List -->

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