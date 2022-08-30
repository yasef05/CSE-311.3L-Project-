<?php
    include 'controller/loginController.php';
    
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commerce Website</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <script src="javascript/login.js"></script>
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
                </ul>
                <div class="clearfix"></div>
            </div>
    <!-- Login -->     
            <form onsubmit="return validate()" action="" method="post"class="login">
                <h2 class="text-center">Login</h2>
                
                <fieldset>
                    <legend></legend>
                    <div class="login-label">Username</div>
                    <input type="text" name="username" placeholder="Username" value="<?php echo $username; ?>" class="input-responsive" required>
                    <span id="err_uname"> <?php echo $err_uname;?> </span>

                    <div class="login-label">Password</div>
                    <input type="password" name="password" placeholder="XXXXXXX" value="<?php echo $password;?>" class="input-responsive" required>
                    <span id="err_password"> <?php echo $err_password;?> </span>

                    

                    <input type="submit" name="login" value="login" class="btn btn-primary">
                    <br>
                    <h3 align="center"><?php echo $err_db;?></h3>
                </fieldset>
            </form>
            

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