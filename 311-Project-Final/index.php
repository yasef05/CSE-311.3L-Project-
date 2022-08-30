<?php

$db = mysqli_connect("localhost", "root", "", "project");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commerce Website</title>
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
                        <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ">Contact</a>
                    </li>
                    <li>
                        <a href="login.php">Login</a>
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
            
            <form action="#" method="POST">
                <input type="search" name="search" placeholder="eg. shirts" required>
                <input type="submit" name="submit" value="Search" class="btn btn-primary">
            </form>

        </div>
    </section>
    <!-- Search -->

    <!-- Categories -->
    <section class="categories">
        <div class="container">
            <h2 class="text-center">Select A Catagory</h2>

            <a href="men.php">
            <div class="box-3 float-container">
                <img src="images/men.jpg" alt="Man" class="img-responsive img-curve">

                <h3 class="float-text text-white">Men</h3>
            </div>
            </a>

            <a href="women.php">
            <div class="box-3 float-container">
                <img src="images/women.jpg" alt="Woman" class="img-responsive img-curve">

                <h3 class="float-text text-white">Women</h3>
            </div>
            </a>

            <a href="children.php">
            <div class="box-3 float-container">
                <img src="images/children.jpg" alt="Chikdren" class="img-responsive img-curve">

                <h3 class="float-text text-white">Children</h3>
            </div>
            </a>

            <div class="clearfix"></div>
        </div>
    </section>
    <!-- Categories -->

    <!-- Social -->
    <section class="social">
        <div class="container text-center">
            <ul>
                <li>
                    <a href="https://www.facebook.com/NorthSouthUniversity/"><img src="https://img.icons8.com/fluent/50/000000/facebook-new.png"/></a>
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
            <p>All Rights Reserved. Designed By <a href="#">Group-11</a></p>
        </div>
    </section>
    <!-- Footer -->

</body>
</html>