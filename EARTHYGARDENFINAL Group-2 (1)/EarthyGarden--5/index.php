<?php 
    session_start();
    if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
        header("location: login.php");
        exit;
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
    <link
        href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,700italic,800italic,400,300,600,700,800'
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
    <div class="container header ">
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
                        <li class="active"><a href="index.php">Home</a></li>
                        <li><a href="about.html">About us</a></li>
                        <li><a href="shop.php">Shop</a></li>
                        <li><a href="login.php">Login</a></li>
                        <li><a href="view_cart.php">See Cart</a></li>
                        <li><a href="logout.php">logout</a></li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
        </nav>
    </div>
  <h1>  Hello <?php echo $_SESSION['username'] ?><h1>
    <!--end-navbar-->
    <!--flex-slider-->
    <div class="main-flexslider">
        <div class="slides">
            <div class="slides">
                <img src="img/hero-img.jpg" alt="slide 01" class="hero-img">
                <div class="slide-caption">
                    <h2>Bringing Nature's </h2>
                    <h2>Beauty to Your Doorstep</h2>
                    <h2><a href="shop.php">SHOP NOW </a></h2>
                </div>
            </div>
        </div>
    </div>
    <!--end-flex-slider-->
    <!--Icon Blocks-->
    <div class="container">
        <div class="icon-blocks">
            <div class="row">
                <div class="col-md-4">
                    <p>
                        <i class="fa fa-group"></i>personalized shop
                    </p>
                </div>
                <div class="col-md-4">
                    <p>
                        <i class="fa fa-bell"></i>email notification
                    </p>
                </div>
                <div class="col-md-4">
                    <p>
                        <i class="fa fa-globe"></i>worldwide shipping
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!--end Icon Blocks-->
    <!--articles-->
    <div class="container">
        <div class="row articles">
            <div class="col-md-3 col-sm-6">
                <a href="shop.php">
                    <img src="img/img-1.jpg" alt="img">
                    <div class="text">
                        <span>
                            The Seiko </span>
                        <p>
                            £ 29.99
                        </p><button type="submit" class="add-to-cart-btn">Shop Now</button>
                    </div>
                </a>
            </div>
            <div class="col-md-3 col-sm-6">
                <a href="shop.php">
                    <img src="img/img-2.jpg" alt="img">
                    <div class="text">
                        <span>
                            The Yui </span>
                        <p>
                            £ 35.99
                        </p><button type="submit" class="add-to-cart-btn">Shop Now</button>
                    </div>
                </a>
            </div>
            <div class="col-md-3 col-sm-6">
                <a href="shop.php">
                    <img src="img/img-3.jpg" alt="img">
                    <div class="text">
                        <span>
                            The Anna </span>
                        <p>
                            £ 25.99
                        </p><button type="submit" class="add-to-cart-btn">Shop Now</button>
                    </div>
                </a>
            </div>
            <div class="col-md-3 col-sm-6">
                <a href="shop.php">
                    <img src="img/img-4.jpg" alt="img">
                    <div class="text">
                        <span>
                            The Hallie </span>
                        <p>
                            £ 25.99
                        </p><button type="submit" class="add-to-cart-btn">Shop Now</button>
                    </div>
                </a>
            </div>
            
        </div>
    </div>
    <!--end-articles-->

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