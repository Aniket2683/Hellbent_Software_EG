<?php
// view_cart.php

// Connect to the database
$host = 'localhost';
$dbname = 'earthygarden';
$username = 'root';
$password = '';

try {
    $conn = new PDO("mysql:host=localhost;dbname=earthygarden",'root', '');
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Retrieve all items from the cart_items table
    $stmt = $conn->prepare("SELECT * FROM cart_items");
    $stmt->execute();
    $cart_items = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Calculate the total sum of prices
    $total_sum = 0;
    foreach ($cart_items as $item) {
        $total_sum += $item['price'];
    }
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>

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
    
    <!-- Display the cart items in a table -->
    <div class="container-1">
  <center>  <h1>Cart Items</h1></center>
    <?php if (count($cart_items) > 0) : ?>
    <center>     <table>
            <tr>
            <th>Product Id</th>
                <th>Product Name</th>
                <th>Quantity</th>
                <th>Price</th>
               
              
            </tr>
            <?php foreach ($cart_items as $item) : ?>
                <tr>
                    <td><?php echo $item['product_id']; ?></td>
                    <td><?php echo $item['product_name']; ?></td>
                    <td><?php echo $item['quantity']; ?></td>
                    <td>$<?php echo number_format($item['price'], 2); ?></td>
                    
            
                </tr>
            <?php endforeach; ?>
            <tr>
                <td colspan="3" style="text-align: right;"><strong>Total:</strong></td>
                <td>$<?php echo number_format($total_sum, 2); ?></td>
            </tr></center>
        </table>
    <?php else : ?>
        <p>No items in the cart.</p>
    <?php endif; ?>
</div>
    </div><center><a href="checkout.html">
    <button type="submit" class="add-to-cart-btn">Checkout</button></a></center>
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

