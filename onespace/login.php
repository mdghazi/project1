  <?php
//login.php

include("admin/inc/connect.php");

if(isset($_COOKIE["type"]))
{
 header("location:dashboard.php");
}

$message = '';

//if(isset($_POST["login"]))
//{
 if(empty($_POST["email"]) && empty($_POST["pass"]))
 {
  header("location:login.php");
  $message = "<div class='alert alert-danger'>Both Fields are required</div>";
 }
 else
 {
  $query = "
  SELECT * FROM tbl_customer 
  WHERE email = '".$_POST['email']."'
  ";
  $statement = mysqli_query($conn, $query);
  
  if(mysqli_num_rows($statement)>0)
  {
   $result = mysqli_fetch_array($statement);
    if(password_verify($_POST["pass"], $result["password"]))
    {
     setcookie("type", $result["name"], time()+3600);
    // $ab= $_COOKIE['type'];
     //echo "$ab";
     header("location:dashboard.php");
    }
    else
    {
     $message = '<div class="alert alert-danger">Wrong Password</div>';
    }
   }
   else
  {
   $message = "<div class='alert alert-danger'>Wrong Email Address</div>";
  }
 }
//}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Mobile Web-app fullscreen -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">

    <!-- Meta tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <!--Title-->
    <title>Login register | Mobel - Furniture Website Template</title>

    <!--CSS styles-->
    <link rel="stylesheet" media="all" href="css/bootstrap.css" />
    <link rel="stylesheet" media="all" href="css/animate.css" />
    <link rel="stylesheet" media="all" href="css/font-awesome.css" />
    <link rel="stylesheet" media="all" href="css/furniture-icons.css" />
    <link rel="stylesheet" media="all" href="css/linear-icons.css" />
    <link rel="stylesheet" media="all" href="css/magnific-popup.css" />
    <link rel="stylesheet" media="all" href="css/owl.carousel.css" />
    <link rel="stylesheet" media="all" href="css/ion-range-slider.css" />
    <link rel="stylesheet" media="all" href="css/theme.css" />

    <!--Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600&amp;subset=latin-ext" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div class="page-loader"></div>

    <div class="wrapper">

        <!--Use class "navbar-fixed" or "navbar-default" -->
        <!--If you use "navbar-fixed" it will be sticky menu on scroll (only for large screens)-->

        <!-- ======================== Navigation ======================== -->

        <nav class="navbar-fixed">

            <div class="container">

                <!-- ==========  Top navigation ========== -->

                <div class="navigation navigation-top clearfix">
                    <ul>
                        <!--add active class for current page-->

                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-youtube"></i></a></li>

                        <!--Currency selector-->

                       
                        <li><a href="login.php" class="open-login"><i class="icon icon-user"></i></a></li>
                        <li><a href="javascript:void(0);" class="open-search"><i class="icon icon-magnifier"></i></a></li>
                        <li><a href="javascript:void(0);" class="open-cart"><i class="icon icon-cart"></i> <span>3</span></a></li>
                    </ul>
                </div> <!--/navigation-top-->

                <!-- ==========  Main navigation ========== -->

                <div class="navigation navigation-main">

                    <!-- Setup your logo here-->

                    <a href="index.php" class="logo">
                    <!-- <img src="assets/images/logo.png" alt="" />--><h3 style="color: white">Onespace</h3>
                    </a>
                    <!-- Mobile toggle menu -->

                    <a href="#" class="open-menu"><i class="icon icon-menu"></i></a>

                    <!-- Convertible menu (mobile/desktop)-->

                    <div class="floating-menu">

                        <!-- Mobile toggle menu trigger-->

                        <div class="close-menu-wrapper">
                            <span class="close-menu"><i class="icon icon-cross"></i></span>
                        </div>

                        <ul>
                            <li><a href="index.html">Home</a></li>
                            
                            <!-- Multi-content dropdown -->

                            <li>
                                <a href="index.html">Pages <span class="open-dropdown"><i class="fa fa-angle-down"></i></span></a>
                                <div class="navbar-dropdown">
                                    <div class="navbar-box">

                                        <!-- box-1 (left-side)-->

                                        <div class="box-1">
                                            <div class="box">
                                                <div class="h2">Find your inspiration</div>
                                                <div class="clearfix">
                                                    <p>Homes that differ in terms of style, concept and architectural solutions have been furnished by Furniture Factory. These spaces tell of an international lifestyle that expresses modernity, research and a creative spirit.</p>
                                                    <a class="btn btn-clean btn-big" href="products-grid.html">Shop now</a>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- box-2 (right-side)-->

                                        <div class="box-2">
                                            <div class="box clearfix">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <ul>
                                                            <li class="label">Homepage</li>
                                                            <li><a href="index.html">Home - Slider</a></li>
                                                            <li><a href="index-2.html">Home - Tabsy gallery</a></li>
                                                            <li><a href="index-3.html">Home - Slider full screen</a></li>
                                                            <li><a href="index-4.html">Home - Info icons</a></li>
                                                            <li><a href="index-xmas.html">Home - Xmas</a></li>
                                                            <li><a href="index-rtl.html">Home - RTL <span class="label label-warning">New</span></a></li>
                                                            <li><a href="index-5.html">Onepage</a></li>
                                                            <li><a href="index-6.html">Onepage - Filters <span class="label label-warning">Isotope</span></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <ul>
                                                            <li class="label">Blog</li>
                                                            <li><a href="blog-grid.html">Blog grid</a></li>
                                                            <li><a href="blog-list.html">Blog list</a></li>
                                                            <li><a href="blog-grid-fullpage.html">Blog fullpage</a></li>
                                                            <li><a href="ideas.html">Blog ideas</a></li>
                                                            <li><a href="article.html">Blog article</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <ul>
                                                            <li class="label">Pages</li>
                                                            <li><a href="about.html">About us</a></li>
                                                            <li><a href="contact.html">Contact</a></li>
                                                            <li><a href="login.php">Login & Register <span class="label label-warning">New</span></a></li>
                                                        </ul>
                                                        <ul>
                                                            <li class="label">Extras</li>
                                                            <li><a href="shortcodes.html">Shortcodes</a></li>
                                                            <li><a href="email-receipt.html">Email template <span class="label label-warning">New</span></a></li>
                                                            <li><a href="404.html">Not found 404 <span class="label label-warning">New</span></a></li>
                                                        </ul>
                                                    </div>
                                                </div> <!--/row-->
                                            </div> <!--/box-->
                                        </div> <!--/box-2-->
                                    </div> <!--/navbar-box-->
                                </div> <!--/navbar-dropdown-->
                            </li>

                            <!-- Single dropdown-->

                            <li>
                                <a href="#">Shop <span class="open-dropdown"><i class="fa fa-angle-down"></i></span></a>
                                <div class="navbar-dropdown navbar-dropdown-single">
                                    <div class="navbar-box">

                                        <!-- box-2 (without 'box-1', box-2 will be displayed as full width)-->

                                        <div class="box-2">
                                            <div class="box clearfix">
                                                <ul>
                                                    <li class="label">Shop</li>
                                                    <li><a href="products-grid.html">Products grid</a></li>
                                                    <li><a href="products-list.html">Products list</a></li>
                                                    <li><a href="category.html">Products intro</a></li>
                                                    <li><a href="products-topbar.html">Products topbar</a></li>
                                                    <li><a href="product.html">Product overview</a></li>
                                                </ul>
                                                <ul>
                                                    <li class="label">Shop Isotope</li>
                                                    <li><a href="products-grid-isotope.html">Products filters <span class="label label-warning">New</span></a></li>
                                                    <li><a href="products-topbar-isotope.html">Products topbar <span class="label label-warning">New</span></a></li>
                                                </ul>
                                                <ul>
                                                    <li class="label">Checkout</li>
                                                    <li><a href="checkout-1.html">Checkout - Cart items</a></li>
                                                    <li><a href="checkout-2.html">Checkout - Delivery</a></li>
                                                    <li><a href="checkout-3.html">Checkout - Payment</a></li>
                                                    <li><a href="checkout-4.html">Checkout - Receipt</a></li>
                                                </ul>
                                            </div> <!--/box-->
                                        </div> <!--/box-2-->
                                    </div> <!--/navbar-box-->
                                </div> <!--/navbar-dropdown-->
                            </li>

                            <!-- Furniture icons in dropdown-->

                            <li>
                                <a href="category.html">Icons <span class="open-dropdown"><i class="fa fa-angle-down"></i></span></a>
                                <div class="navbar-dropdown">
                                    <div class="navbar-box">

                                        <!-- box-1 (left-side)-->

                                        <div class="box-1">
                                            <div class="image">
                                                <img src="assets/images/blog-2.jpg" alt="Lorem ipsum" />
                                            </div>
                                            <div class="box">
                                                <div class="h2">Best ideas</div>
                                                <div class="clearfix">
                                                    <p>Homes that differ in terms of style, concept and architectural solutions have been furnished by Furniture Factory. These spaces tell of an international lifestyle that expresses modernity, research and a creative spirit.</p>
                                                    <a class="btn btn-clean btn-big" href="ideas.html">Explore</a>
                                                </div>
                                            </div>
                                        </div> <!--/box-1-->

                                        <!-- box-2 (right-side)-->

                                        <div class="box-2">
                                            <div class="clearfix categories">
                                                <div class="row">
                                                    
                                                    <!--icon item-->                                                

                                                    <div class="col-sm-3 col-xs-6">
                                                        <a href="javascript:void(0);">
                                                            <figure>
                                                                <i class="f-icon f-icon-sofa"></i>
                                                                <figcaption>Sofa</figcaption>
                                                            </figure>
                                                        </a>
                                                    </div>
                                                    
                                                    <!--icon item-->                                                

                                                    <div class="col-sm-3 col-xs-6">
                                                        <a href="javascript:void(0);">
                                                            <figure>
                                                                <i class="f-icon f-icon-armchair"></i>
                                                                <figcaption>Armchairs</figcaption>
                                                            </figure>
                                                        </a>
                                                    </div>
                                                    
                                                    <!--icon item-->                                                

                                                    <div class="col-sm-3 col-xs-6">
                                                        <a href="javascript:void(0);">
                                                            <figure>
                                                                <i class="f-icon f-icon-chair"></i>
                                                                <figcaption>Chairs</figcaption>
                                                            </figure>
                                                        </a>
                                                    </div>
                                                    
                                                    <!--icon item-->                                                

                                                    <div class="col-sm-3 col-xs-6">
                                                        <a href="javascript:void(0);">
                                                            <figure>
                                                                <i class="f-icon f-icon-dining-table"></i>
                                                                <figcaption>Dining tables</figcaption>
                                                            </figure>
                                                        </a>
                                                    </div>
                                                    
                                                    <!--icon item-->                                                

                                                    <div class="col-sm-3 col-xs-6">
                                                        <a href="javascript:void(0);">
                                                            <figure>
                                                                <i class="f-icon f-icon-media-cabinet"></i>
                                                                <figcaption>Media storage</figcaption>
                                                            </figure>
                                                        </a>
                                                    </div>
                                                    
                                                    <!--icon item-->                                                

                                                    <div class="col-sm-3 col-xs-6">
                                                        <a href="javascript:void(0);">
                                                            <figure>
                                                                <i class="f-icon f-icon-table"></i>
                                                                <figcaption>Tables</figcaption>
                                                            </figure>
                                                        </a>
                                                    </div>
                                                    
                                                    <!--icon item-->                                                

                                                    <div class="col-sm-3 col-xs-6">
                                                        <a href="javascript:void(0);">
                                                            <figure>
                                                                <i class="f-icon f-icon-bookcase"></i>
                                                                <figcaption>Bookcase</figcaption>
                                                            </figure>
                                                        </a>
                                                    </div>
                                                    
                                                    <!--icon item-->                                                

                                                    <div class="col-sm-3 col-xs-6">
                                                        <a href="javascript:void(0);">
                                                            <figure>
                                                                <i class="f-icon f-icon-bedroom"></i>
                                                                <figcaption>Bedroom</figcaption>
                                                            </figure>
                                                        </a>
                                                    </div>
                                                    
                                                    <!--icon item-->                                                

                                                    <div class="col-sm-3 col-xs-6">
                                                        <a href="javascript:void(0);">
                                                            <figure>
                                                                <i class="f-icon f-icon-nightstand"></i>
                                                                <figcaption>Nightstand</figcaption>
                                                            </figure>
                                                        </a>
                                                    </div>
                                                    
                                                    <!--icon item-->                                                

                                                    <div class="col-sm-3 col-xs-6">
                                                        <a href="javascript:void(0);">
                                                            <figure>
                                                                <i class="f-icon f-icon-children-room"></i>
                                                                <figcaption>Children room</figcaption>
                                                            </figure>
                                                        </a>
                                                    </div>
                                                    
                                                    <!--icon item-->                                                

                                                    <div class="col-sm-3 col-xs-6">
                                                        <a href="javascript:void(0);">
                                                            <figure>
                                                                <i class="f-icon f-icon-kitchen"></i>
                                                                <figcaption>Kitchen</figcaption>
                                                            </figure>
                                                        </a>
                                                    </div>
                                                    
                                                    <!--icon item-->                                                

                                                    <div class="col-sm-3 col-xs-6">
                                                        <a href="javascript:void(0);">
                                                            <figure>
                                                                <i class="f-icon f-icon-bathroom"></i>
                                                                <figcaption>Bathroom</figcaption>
                                                            </figure>
                                                        </a>
                                                    </div>
                                                    
                                                    <!--icon item-->                                                

                                                    <div class="col-sm-3 col-xs-6">
                                                        <a href="javascript:void(0);">
                                                            <figure>
                                                                <i class="f-icon f-icon-wardrobe"></i>
                                                                <figcaption>Wardrobe</figcaption>
                                                            </figure>
                                                        </a>
                                                    </div>
                                                    
                                                    <!--icon item-->                                                

                                                    <div class="col-sm-3 col-xs-6">
                                                        <a href="javascript:void(0);">
                                                            <figure>
                                                                <i class="f-icon f-icon-shoe-cabinet"></i>
                                                                <figcaption>Shoe cabinet</figcaption>
                                                            </figure>
                                                        </a>
                                                    </div>
                                                    
                                                    <!--icon item-->                                                

                                                    <div class="col-sm-3 col-xs-6">
                                                        <a href="javascript:void(0);">
                                                            <figure>
                                                                <i class="f-icon f-icon-office"></i>
                                                                <figcaption>Office</figcaption>
                                                            </figure>
                                                        </a>
                                                    </div>
                                                    
                                                    <!--icon item-->                                                

                                                    <div class="col-sm-3 col-xs-6">
                                                        <a href="javascript:void(0);">
                                                            <figure>
                                                                <i class="f-icon f-icon-bar-set"></i>
                                                                <figcaption>Bar sets</figcaption>
                                                            </figure>
                                                        </a>
                                                    </div>
                                                    
                                                    <!--icon item-->                                                

                                                    <div class="col-sm-3 col-xs-6">
                                                        <a href="javascript:void(0);">
                                                            <figure>
                                                                <i class="f-icon f-icon-lightning"></i>
                                                                <figcaption>Lightning</figcaption>
                                                            </figure>
                                                        </a>
                                                    </div>
                                                    
                                                    <!--icon item-->                                                

                                                    <div class="col-sm-3 col-xs-6">
                                                        <a href="javascript:void(0);">
                                                            <figure>
                                                                <i class="f-icon f-icon-carpet"></i>
                                                                <figcaption>Carpet</figcaption>
                                                            </figure>
                                                        </a>
                                                    </div>
                                                </div> <!--/row-->
                                            </div> <!--/categories-->
                                        </div> <!--/box-2-->
                                    </div> <!--/navbar-box-->
                                </div> <!--/navbar-dropdown-->
                            </li>

                            <!-- Mega menu dropdown -->

                            <li>
                                <a href="#">Megamenu <span class="open-dropdown"><i class="fa fa-angle-down"></i></span></a>
                                <div class="navbar-dropdown">
                                    <div class="navbar-box">
                                        <div class="box-2">
                                            <div class="box clearfix">
                                                <div class="row">
                                                    <div class="clearfix">
                                                        <div class="col-md-3">
                                                            <ul>
                                                                <li class="label">Seating</li>
                                                                <li><a href="javascript:void(0);">Benches</a></li>
                                                                <li><a href="javascript:void(0);">Submenu <span class="label label-warning">New</span></a></li>
                                                                <li><a href="javascript:void(0);">Chaises</a></li>
                                                                <li><a href="javascript:void(0);">Recliners</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <ul>
                                                                <li class="label">Storage</li>
                                                                <li><a href="javascript:void(0);">Bockcases</a></li>
                                                                <li><a href="javascript:void(0);">Closets</a></li>
                                                                <li><a href="javascript:void(0);">Wardrobes</a></li>
                                                                <li><a href="javascript:void(0);">Dressers <span class="label label-success">Trending</span></a></li>
                                                                <li><a href="javascript:void(0);">Sideboards </a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <ul>
                                                                <li class="label">Tables</li>
                                                                <li><a href="javascript:void(0);">Consoles</a></li>
                                                                <li><a href="javascript:void(0);">Desks</a></li>
                                                                <li><a href="javascript:void(0);">Dining tables</a></li>
                                                                <li><a href="javascript:void(0);">Occasional tables</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <ul>
                                                                <li class="label">Chairs</li>
                                                                <li><a href="javascript:void(0);">Dining Chairs</a></li>
                                                                <li><a href="javascript:void(0);">Office Chairs</a></li>
                                                                <li><a href="javascript:void(0);">Lounge Chairs <span class="label label-warning">Offer</span></a></li>
                                                                <li><a href="javascript:void(0);">Stools</a></li>

                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="clearfix">
                                                        <div class="col-md-3">
                                                            <ul>
                                                                <li class="label">Kitchen</li>
                                                                <li><a href="javascript:void(0);">Kitchen types</a></li>
                                                                <li><a href="javascript:void(0);">Kitchen elements <span class="label label-info">50%</span></a></li>
                                                                <li><a href="javascript:void(0);">Bars</a></li>
                                                                <li><a href="javascript:void(0);">Wall decoration</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <ul>
                                                                <li class="label">Accessories</li>
                                                                <li><a href="javascript:void(0);">Coat Racks</a></li>
                                                                <li><a href="javascript:void(0);">Lazy bags <span class="label label-success">Info</span></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <ul>
                                                                <li class="label">Beds</li>
                                                                <li><a href="javascript:void(0);">Beds</a></li>
                                                                <li><a href="javascript:void(0);">Sofabeds</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <ul>
                                                                <li class="label">Entertainment</li>
                                                                <li><a href="javascript:void(0);">Wall units <span class="label label-warning">Popular</span></a></li>
                                                                <li><a href="javascript:void(0);">Media sets</a></li>
                                                                <li><a href="javascript:void(0);">Decoration</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> <!--/box-->
                                        </div> <!--/box-2-->
                                    </div> <!--/navbar-box-->
                                </div> <!--/navbar-dropdown-->
                            </li>

                            <!-- Simple menu link-->

                            <li><a href="shortcodes.html">Shortcodes</a></li>
                        </ul>
                    </div> <!--/floating-menu-->
                </div> <!--/navigation-main-->

                <!-- ==========  Search wrapper ========== -->

                <div class="search-wrapper">

                    <!-- Search form -->
                    <input class="form-control" placeholder="Search..." />
                    <button class="btn btn-main btn-search">Go!</button>

                    <!-- Search results - live search -->
                    <div class="search-results">
                        <div class="search-result-items">
                            <div class="title h4">Products <a href="#" class="btn btn-clean-dark btn-xs">View all</a></div>
                            <ul>
                                <li><a href="#"><span class="id">42563</span> <span class="name">Green corner</span> <span class="category">Sofa</span></a></li>
                                <li><a href="#"><span class="id">42563</span> <span class="name">Laura</span> <span class="category">Armchairs</span></a></li>
                                <li><a href="#"><span class="id">42563</span> <span class="name">Nude</span> <span class="category">Dining tables</span></a></li>
                                <li><a href="#"><span class="id">42563</span> <span class="name">Aurora</span> <span class="category">Nightstands</span></a></li>
                                <li><a href="#"><span class="id">42563</span> <span class="name">Dining set</span> <span class="category">Kitchen</span></a></li>
                                <li><a href="#"><span class="id">42563</span> <span class="name">Seat chair</span> <span class="category">Bar sets</span></a></li>
                            </ul>
                        </div> <!--/search-result-items-->
                        <div class="search-result-items">
                            <div class="title h4">Blog <a href="#" class="btn btn-clean-dark btn-xs">View all</a></div>
                            <ul>
                                <li><a href="#"><span class="id">01 Jan</span> <span class="name">Creating the Perfect Gallery Wall </span> <span class="category">Interior ideas</span></a></li>
                                <li><a href="#"><span class="id">12 Jan</span> <span class="name">Making the Most Out of Your Kids Old Bedroom</span> <span class="category">Interior ideas</span></a></li>
                                <li><a href="#"><span class="id">28 Dec</span> <span class="name">Have a look at our new projects!</span> <span class="category">Modern design</span></a></li>
                                <li><a href="#"><span class="id">31 Sep</span> <span class="name">Decorating When You're Starting Out or Starting Over</span> <span class="category">Best of 2017</span></a></li>
                                <li><a href="#"><span class="id">22 Sep</span> <span class="name">The 3 Tricks that Quickly Became Rules</span> <span class="category">Tips for you</span></a></li>
                            </ul>
                        </div> <!--/search-result-items-->
                    </div> <!--/search-results-->
                </div>

                <!-- ==========  Login wrapper ========== -->

                <div class="login-wrapper">
                    <form>
                        <div class="h4">Sign in</div>
                        <div class="form-group">
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="pass" id="exampleInputPassword1" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <a href="#forgotpassword" class="open-popup">Forgot password?</a>
                            <a href="#createaccount" class="open-popup">Don't have an account?</a>
                        </div>
                        <button type="submit" class="btn btn-block btn-main">Submit</button>
                    </form>
                </div>

                <!-- ==========  Cart wrapper ========== -->

                <div class="cart-wrapper">
                    <div class="checkout">
                        <div class="clearfix">

                            <!--cart item-->

                            <div class="row">

                                <div class="cart-block cart-block-item clearfix">
                                    <div class="image">
                                        <a href="product.html"><img src="assets/images/product-1.png" alt="" /></a>
                                    </div>
                                    <div class="title">
                                        <div><a href="product.html">Green corner</a></div>
                                        <small>Green corner</small>
                                    </div>
                                    <div class="quantity">
                                        <input type="number" value="2" class="form-control form-quantity" />
                                    </div>
                                    <div class="price">
                                        <span class="final">$ 1.998</span>
                                        <span class="discount">$ 2.666</span>
                                    </div>
                                    <!--delete-this-item-->
                                    <span class="icon icon-cross icon-delete"></span>
                                </div>

                                <!--cart item-->

                                <div class="cart-block cart-block-item clearfix">
                                    <div class="image">
                                        <a href="product.html"><img src="assets/images/product-2.png" alt="" /></a>
                                    </div>
                                    <div class="title">
                                        <div><a href="product.html">Green corner</a></div>
                                        <small>Green corner</small>
                                    </div>
                                    <div class="quantity">
                                        <input type="number" value="2" class="form-control form-quantity" />
                                    </div>
                                    <div class="price">
                                        <span class="final">$ 1.998</span>
                                        <span class="discount">$ 2.666</span>
                                    </div>
                                    <!--delete-this-item-->
                                    <span class="icon icon-cross icon-delete"></span>
                                </div>

                                <!--cart item-->

                                <div class="cart-block cart-block-item clearfix">
                                    <div class="image">
                                        <a href="product.html"><img src="assets/images/product-3.png" alt="" /></a>
                                    </div>
                                    <div class="title">
                                        <div><a href="product.html">Green corner</a></div>
                                        <small>Green corner</small>
                                    </div>
                                    <div class="quantity">
                                        <input type="number" value="2" class="form-control form-quantity" />
                                    </div>
                                    <div class="price">
                                        <span class="final">$ 1.998</span>
                                        <span class="discount">$ 2.666</span>
                                    </div>
                                    <!--delete-this-item-->
                                    <span class="icon icon-cross icon-delete"></span>
                                </div>

                                <!--cart item-->

                                <div class="cart-block cart-block-item clearfix">
                                    <div class="image">
                                        <a href="product.html"><img src="assets/images/product-4.png" alt="" /></a>
                                    </div>
                                    <div class="title">
                                        <div><a href="product.html">Green corner</a></div>
                                        <small>Green corner</small>
                                    </div>
                                    <div class="quantity">
                                        <input type="number" value="2" class="form-control form-quantity" />
                                    </div>
                                    <div class="price">
                                        <span class="final">$ 1.998</span>
                                        <span class="discount">$ 2.666</span>
                                    </div>
                                    <!--delete-this-item-->
                                    <span class="icon icon-cross icon-delete"></span>
                                </div>
                            </div>

                            <hr />

                            <!--cart prices -->

                            <div class="clearfix">
                                <div class="cart-block cart-block-footer clearfix">
                                    <div>
                                        <strong>Discount 15%</strong>
                                    </div>
                                    <div>
                                        <span>$ 159,00</span>
                                    </div>
                                </div>

                                <div class="cart-block cart-block-footer clearfix">
                                    <div>
                                        <strong>Shipping</strong>
                                    </div>
                                    <div>
                                        <span>$ 30,00</span>
                                    </div>
                                </div>

                                <div class="cart-block cart-block-footer clearfix">
                                    <div>
                                        <strong>VAT</strong>
                                    </div>
                                    <div>
                                        <span>$ 59,00</span>
                                    </div>
                                </div>
                            </div>

                            <hr />

                            <!--cart final price -->

                            <div class="clearfix">
                                <div class="cart-block cart-block-footer clearfix">
                                    <div>
                                        <strong>Total</strong>
                                    </div>
                                    <div>
                                        <div class="h4 title">$ 1259,00</div>
                                    </div>
                                </div>
                            </div>


                            <!--cart navigation -->

                            <div class="cart-block-buttons clearfix">
                                <div class="row">
                                    <div class="col-xs-6">
                                        <a href="products-grid.html" class="btn btn-clean-dark">Continue shopping</a>
                                    </div>
                                    <div class="col-xs-6 text-right">
                                        <a href="checkout-1.html" class="btn btn-main"><span class="icon icon-cart"></span> Checkout</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div> <!--/checkout-->
                </div> <!--/cart-wrapper-->
            </div> <!--/container-->
        </nav>

        <!-- ========================  Main header ======================== -->

        <section class="main-header" style="background-image:url(assets/images/gallery-2.jpg)">
            <header>
                <div class="container text-center">
                    <h2 class="h2 title">Customer page</h2>
                    <ol class="breadcrumb breadcrumb-inverted">
                        <li><a href="index.html"><span class="icon icon-home"></span></a></li>
                        <li><a class="active" href="login.php">Login & Register</a></li>
                    </ol>
                </div>
            </header>
        </section>

        <!-- ========================  Login & register ======================== -->

        <section class="login-wrapper login-wrapper-page">
            <div class="container">

                <header class="hidden">
                    <h3 class="h3 title">Sign in</h3>
                </header>

                <div class="row">

                    <!-- === left content === -->

                    <div class="col-md-6 col-md-offset-3">

                        <!-- === login-wrapper === -->

                        <div class="login-wrapper">

                            <div class="white-block">

                                <!--signin-->

                                <div class="login-block login-block-signin">

                                    <div class="h4">Sign in <a href="javascript:void(0);" class="btn btn-main btn-xs btn-register pull-right">create an account</a></div>

                                    <hr />
                                    <form method="post" action="login.php">

                                    <div class="row">

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="text" value="" class="form-control" name="email" placeholder="User ID/E-Mail">
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="password" value="" class="form-control" name="pass" placeholder="Password">
                                            </div>
                                        </div>

                                        <div class="col-xs-6">
                                            <span class="checkbox">
                                                <input type="checkbox" id="checkBoxId3">
                                                <label for="checkBoxId3">Remember me</label>
                                            </span>
                                        </div>

                                        <div class="col-xs-6 text-right">
                                           <!--  <a href="#" class="btn btn-main">Login</a> -->
                                             <a> <button type="btn" name="login" class="btn btn-main btn-block">Login</button></a>
                                        </div>
                                    </div>
                                </form>
                                </div> <!--/signin-->
                                <!--signup-->

                                <div class="login-block login-block-signup">

                                     <form method="post" action="register.php">   
                                    <div class="h4">Register now <a href="javascript:void(0);" class="btn btn-main btn-xs btn-login pull-right">Log in</a></div>

                                    <hr />

                                    <div class="row">

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="text" value="" class="form-control" name="name" placeholder="Name: *">
                                            </div>
                                        </div>

                                        
                                        

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" value="" class="form-control" name="email" placeholder="Email: *">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" value="" class="form-control" name="phone" placeholder="Phone: *">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="password" value="" class="form-control" name="pass" placeholder=" Create Password: *">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="password" value="" class="form-control" name="cpass" placeholder="Confirm Password: *">
                                            </div>
                                        </div>
                                    </form>

                                        <div class="col-md-12">
                                            <hr />
                                            <span class="checkbox">
                                                <input type="checkbox" id="checkBoxId1">
                                                <label for="checkBoxId1">I have read and accepted the <a href="#">terms</a>, as well as read and understood our terms of <a href="#">business contidions</a></label>
                                            </span>
                                            <span class="checkbox">
                                                <input type="checkbox" id="checkBoxId2">
                                                <label for="checkBoxId2">Subscribe to exciting newsletters and great tips</label>
                                            </span>
                                            <hr />
                                        </div>

                                        <div class="col-md-12">
                                            <!--a href="#" name="create-acc" class="btn btn-main btn-block">Create account</a-->
                                           <a> <button type="btn" name="create-acc" class="btn btn-main btn-block">Create Account</button></a>
                                        </div>

                                    </div>
                                </div> <!--/signup-->
                            </div>
                        </div> <!--/login-wrapper-->
                    </div> <!--/col-md-6-->

                </div>

            </div>
        </section>

        <!-- ================== Footer  ================== -->

        <footer>
            <div class="container">

                <!--footer showroom-->
                <div class="footer-showroom">
                    <div class="row">
                        <div class="col-sm-8">
                            <h2>Visit our showroom</h2>
                            <p>200 12th Ave, New York, NY 10001, USA</p>
                            <p>Mon - Sat: 10 am - 6 pm &nbsp; &nbsp; | &nbsp; &nbsp; Sun: 12pm - 2 pm</p>
                        </div>
                        <div class="col-sm-4 text-center">
                            <a href="#" class="btn btn-clean"><span class="icon icon-map-marker"></span> Get directions</a>
                            <div class="call-us h4"><span class="icon icon-phone-handset"></span> 333.278.06622</div>
                        </div>
                    </div>
                </div>

                <!--footer links-->
                <div class="footer-links">
                    <div class="row">
                        <div class="col-sm-4 col-md-2">
                            <h5>Browse by</h5>
                            <ul>
                                <li><a href="#">Brand</a></li>
                                <li><a href="#">Product</a></li>
                                <li><a href="#">Category</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-4 col-md-2">
                            <h5>Recources</h5>
                            <ul>
                                <li><a href="#">Design</a></li>
                                <li><a href="#">Projects</a></li>
                                <li><a href="#">Sales</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-4 col-md-2">
                            <h5>Our company</h5>
                            <ul>
                                <li><a href="#">About</a></li>
                                <li><a href="#">News</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <h5>Sign up for our newsletter</h5>
                            <p><i>Add your email address to sign up for our monthly emails and to receive promotional offers.</i></p>
                            <div class="form-group form-newsletter">
                                <input class="form-control" type="text" name="email" value="" placeholder="Email address" />
                                <input type="submit" class="btn btn-clean btn-sm" value="Subscribe" />
                            </div>
                        </div>
                    </div>
                </div>

                <!--footer social-->

                <div class="footer-social">
                    <div class="row">
                        <div class="col-sm-6">
                             <a href="#">Privacy policy</a>
                        </div>
                        <div class="col-sm-6 links">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

    </div> <!--/wrapper-->

    <!--JS files-->
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery.bootstrap.js"></script>
    <script src="js/jquery.magnific-popup.js"></script>
    <script src="js/jquery.owl.carousel.js"></script>
    <script src="js/jquery.ion.rangeSlider.js"></script>
    <script src="js/jquery.isotope.pkgd.js"></script>
    <script src="js/main.js"></script>
</body>

</html>
