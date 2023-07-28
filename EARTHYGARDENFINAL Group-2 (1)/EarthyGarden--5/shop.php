<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>EarthyGarden</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css" media="screen">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,700italic,800italic,400,300,600,700,800'
        rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
</head>

<body>
    <!--top-strip-->
    <div class="top-strip">
        <div class="container">
            <div class="row">
                <div class="col-md-6 user">
                    <p>
                        Welcome to EarthyGarden
                    </p>
                </div>
                <div class="col-md-6 language">
                    <ul>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--end-top-strip-->
    <!--navbar-->
    <div class="container header">
        <nav id="myNavbar" class="navbar navbar-default " role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php"><span class="header-name">EarthyGarden</span></a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="about.html">About us</a></li>
                        <li class="active"><a href="shop.php">Shop</a></li>
                        <li><a href="login.php">Login</a></li>
                        <li><a href="view_cart.php">See Cart</a></li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
        </nav>
    </div>
    <!--end-navbar-->
    <div class="page-title">
        <div class="container">
            <div class="row produti-container">
                <div class="col-md-10 produti">
                    <h4>products</h4>
                </div>
                <div class="col-md-2 cart">
                    <ul>
                        <li>home /</li>
                        <li>shop</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- shop-page -->
    <div class="container">
        <div class="row">
            <?php
            // Replace these variables with your database connection details
            $host = "localhost";
            $username = "root";
            $password = "";
            $dbname = "earthygarden";

            // Create a connection to the database
            $conn = new mysqli('localhost', 'root', '', 'earthygarden');

            // Check if the connection is successful
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // Retrieve products from the database
            $sql = "SELECT product_id, product_name, price, image_data FROM products";
            $result = $conn->query($sql);
            ?>

            <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
            ?>
                    <div class="col-md-4 product-item">
                        <img src="<?php echo $row['image_data']; ?>" alt="<?php echo $row['product_name']; ?>">
                        <h4><?php echo $row['product_name']; ?></h4>
                        <p>Price: $<?php echo $row['price']; ?></p>
                        <form action="add_to_cart.php" method="post">
                            <input type="hidden" name=" product_id" value="<?php echo $row['product_id']; ?>">
                            <button type="submit" class="add-to-cart-btn">Add to Cart</button>
                        </form>
                    </div>
            <?php
                }
            } else {
                echo "No products found.";
            }
            ?>

            <?php
            // Close the database connection
            $conn->close();
            ?>
        </div>
    </div>


    <!--footer-->
    <div class="full-footer">
        <div class="container-full">
            <div class="container info">
                <div class="row">
                    <div class="col-md-8 addres">
                        <a class="footer-name" href="index.php">EarthyGarden</a>
                        <h6>EarthyGarden Nursery, LLC</h6>
                    </div>
                    <div class="col-md-4 footer-about">
                        <h4>About us</h4>
                        <p>
                            Welcome to EarthyGarden, where we, an elderly couple, have turned our lifelong
                            love for flowers into a business. We have been married for over 50 years and have spent most
                            of
                            our lives tending to our garden and nurturing beautiful blooms.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!--end-addres-->
        <div class="container">
            <div class="row bottom-strip">
                <div class="col-md-6 rights">
                    <p>
                        &copy; to EarthyGarden Nursery, LLC
                    </p>
                </div>
                <div class="col-md-6 social">
                    <ul>
                        <li><a href="#"><i class="fa fa-instagram footer-social"></i></a></li>
                        <li><a href="#"><i class="fa fa-facebook footer-social"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin footer-social"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter footer-social"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--end-footer-->

</body>

</html>
