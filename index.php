
<?php
session_start();
?>
<?php
//database conection  file
include('admin/dbconnection.php');
//Code for deletion
// if(isset($_GET['delid']))
// {
// $rid=intval($_GET['delid']);
// $sql=mysqli_query($con,"DELETE FROM employee_details WHERE ID=$rid");//DELETE FROM employee_details WHERE ID=$rid
// echo "<script>alert('Data deleted');</script>"; 
// echo "<script>window.location.href = 'index.php'</script>";     
// } 
$ret=mysqli_query($con,"SELECT * FROM rooms");
$cnt=1;
$row = mysqli_fetch_array($ret);
//echo $row['head'];

$abt = mysqli_query($con,"SELECT * FROM about_us");
$abtrow = mysqli_fetch_array($abt);



?>

<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Sona Template">
    <meta name="keywords" content="Sona, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Staycation-alibag</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cabin:400,500,600,700&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/flaticon.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Offcanvas Menu Section Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="canvas-open">
        <i class="icon_menu"></i>
    </div>
    <div class="offcanvas-menu-wrapper">
        <div class="canvas-close">
            <i class="icon_close"></i>
        </div>
        <!-- <div class="search-icon  search-switch">
            <i class="icon_search"></i>
        </div>
        <div class="header-configure-area">
            <div class="language-option">
                <img src="img/flag.jpg" alt="">
                <span>IN <i class="fa fa-angle-down"></i></span>
                <div class="flag-dropdown">
                    <ul>
                        <li><a href="#">In</a></li>
                        <li><a href="#">IN</a></li>
                    </ul>
                </div>
            </div>
            <a href="#" class="bk-btn"> Now</a>
        </div> -->
        <nav class="mainmenu mobile-menu">
            <ul>
                <li class="active"><a href="./index.php">Home</a></li>
                <li><a href="./rooms.php">Rooms</a></li>
                <li><a href="./about-us.php">About Us</a></li>
                <li><a href="./blog.php">Blog</a></li>
                <li><a href="#">Hire</a>
                    <ul class="dropdown">
                        <li><a href="./ket_photography/index.html" target="_blank">Photographer</a></li>
                        <!-- <li><a href="./blog-details.html">Blog Details</a></li> -->
                        <!-- <li><a href="./room-details.html">Room Details</a></li>
                        <li><a href="./blog-details.html">Blog Details</a></li> -->
                        <!-- <li><a href="#">Family Room</a></li>
                        <li><a href="#">Premium Room</a></li> -->
                    </ul>
                </li>
                <li><a href="./contact.php">Contact</a></li>
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <div class="top-social">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <!-- <a href="#"><i class="fa fa-tripadvisor"></i></a> -->
            <a href="#"><i class="fa fa-instagram"></i></a>
        </div>
        <ul class="top-widget">
            <li><i class="fa fa-phone"></i> (+91)972204612</li>
            <li><i class="fa fa-envelope"></i> Staycation-alibag@gmail.com</li>
        </ul>
    </div>
    <!-- Offcanvas Menu Section End -->

    <!-- Header Section Begin -->
    <header class="header-section">
        <!-- <div class="top-nav">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <ul class="tn-left">
                            <li><i class="fa fa-phone"></i> (12) 345 67890</li>
                            <li><i class="fa fa-envelope"></i> Staycation-alibag@gmail.com</li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <div class="tn-right">
                            <div class="top-social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-tripadvisor"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                            <a href="#" class="bk-btn">Booking Now</a>
                            <div class="language-option">
                                <img src="img/in.jpg" alt="">
                                <span>IN <i class="fa fa-angle-down"></i></span>
                                <div class="flag-dropdown">
                                    <ul>
                                        <li><a href="#">Zi</a></li>
                                        <li><a href="#">Fr</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <div class="menu-item">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2">
                        <div class="logo">
                            <a href="./index.php">
                            <!-- <img src="img/logo.jpg" alt=""> -->
                            <h2>Staycation_alibag</h2>
                                
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-10">
                        <div class="nav-menu">
                            <nav class="mainmenu">
                                <ul>
                                    <li class="active"><a href="./index.php">Home</a></li>
                                    <li><a href="./rooms.php">Rooms</a></li>
                                    <li><a href="./about-us.php">About Us</a></li>
                                    <li><a href="./blog.php">Blog</a></li>
                                    <li><a href="#">Hire</a>
                                        <ul class="dropdown">
                                            <li><a href="./ket_photography/index.html" target="_blank">Photographer</a></li>
                                            <!-- <li><a href="./blog-details.html">Blog Details</a></li> -->
                                            <!-- <li><a href="./room-details.html">Room Details</a></li>
                                            <li><a href="./blog-details.html">Blog Details</a></li> -->
                                            <!-- <li><a href="#">Family Room</a></li>
                                            <li><a href="#">Premium Room</a></li> -->
                                        </ul>
                                    </li>
                                    <li><a href="./contact.php">Contact</a></li>
                                </ul>
                            </nav>
                            <!-- <div class="nav-right search-switch">
                                <i class="icon_search"></i>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header End -->

    <!-- Hero Section Begin -->
    <section class="hero-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="hero-text">
                        <h1>Alibaug's A Luxury Hotel</h1>
                        <p>Discover Tranquility in Alibaug : Your gateway to serene stays.</p>
                        <a href="#" class="primary-btn">Discover Now</a>
                    </div>
                </div>
                <!-- <div class="col-xl-4 col-lg-5 offset-xl-2 offset-lg-1">
                    <div class="booking-form">
                        <h3>Booking Your Hotel</h3>
                        <form action="#">
                            <div class="check-date">
                                <label for="date-in">Check In:</label>
                                <input type="text" class="date-input" id="date-in">
                                <i class="icon_calendar"></i>
                            </div>
                            <div class="check-date">
                                <label for="date-out">Check Out:</label>
                                <input type="text" class="date-input" id="date-out">
                                <i class="icon_calendar"></i>
                            </div>
                            <div class="select-option">
                                <label for="guest">Guests:</label>
                                <select id="guest">
                                    <option value="">2 Adults</option>
                                    <option value="">3 Adults</option>
                                </select>
                            </div>
                            <div class="select-option">
                                <label for="room">Room:</label>
                                <select id="room">
                                    <option value="">1 Room</option>
                                    <option value="">2 Room</option>
                                </select>
                            </div>
                            <button type="submit">Check Availability</button>
                        </form>
                    </div>
                </div> -->
            </div>
        </div>
        <div class="hero-slider owl-carousel">
            <div class="hs-item set-bg" data-setbg="img/hero/hh_2.jpeg"></div>
            <div class="hs-item set-bg" data-setbg="img/hero/sk_6.jpeg"></div>
            <div class="hs-item set-bg" data-setbg="img/hero/hh_8.jpeg"></div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- About Us Section Begin -->
    <section class="aboutus-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-text">
                        <div class="section-title">
                            <span><?php echo $abtrow['head'];?></span>
                            <h2><?php echo $abtrow['liner'];?><br /></h2>
                        </div>
                        <p class="f-para"><?php echo $abtrow['descriptions'];?></p>
                        <!-- <p class="f-para">Staycation-alibag.co.in is a leading online accommodation site. We're passionate about
                            travel. Every day, we inspire and reach travelers across 90 local websites.</p>
                        <p class="s-para">So when it comes to booking the perfect hotel, vacation rental, resort,
                            apartment, guest house, we've got you covered.</p> -->
                        <a href="./about-us.php" class="primary-btn about-btn">Read More</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-pic">
                        <div class="row">
                            <div class="col-sm-12">
                                <img src="img/about/sk_12.jpeg" alt="">
                            </div>
                            <!-- <div class="col-sm-6">
                                <img src="img/about/sk_1.jpeg" alt="">
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Us Section End -->

    <!-- Ads Section -->
    <section class="comon_section ad_section_2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="ads text-center">
                            <a href="#"><img src="img/adbanner.jpg" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Ads Section -->

    <!-- Services Section End -->
    <?php 
            $query = "SELECT * FROM services";
            $query_run = mysqli_query($con, $query);

            if (mysqli_num_rows($query_run) >0){ ?>
    <section class="services-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>What We Do</span>
                        <h2>Discover Our Services</h2>
                    </div>
                </div>
            </div>
            <div class="row">
            <?php foreach ($query_run as $row){   ?>  
                <div class="col-lg-6 col-sm-6">
                    <div class="service-item">
                        <i class="flaticon-036-parking"></i>
                        <h4><?php echo $row['serv_stage'];?></h4>
                        <p><?php echo $row['serv_desc'];?></p>
                        <!-- <p>Research and Budgeting</p>
                        <p>Online Booking Platforms</p>
                        <p>Comparison and Reviews</p> -->

                    </div>
                </div>
                <!-- <div class="col-lg-4 col-sm-6">
                    <div class="service-item">
                        <i class="flaticon-033-dinner"></i>
                        <h4>Catering Service</h4>
                        <p>Customized Menus</p>
                        <p>Healthy Food </p>
                        <p>Online Booking Platforms</p>
                        <p>Comparison and Reviews</p>
                    </div>
                </div> -->
                <!-- <div class="col-lg-6 col-sm-6">
                    <div class="service-item">
                        <i class="flaticon-026-bed"></i>
                        <h4>Special Offers and Packages</h4>
                        <p>Unlock unforgettable experiences in Alibag with our enticing special offers and packages. From romantic escapes to family adventures, enjoy exclusive perks and discounted rates, creating cherished memories without breaking the bank. Choose your package today and embrace the magic of Alibag.</p>
                    </div>
                </div> -->
                <!-- <div class="col-lg-4 col-sm-6">
                    <div class="service-item">
                        <i class="flaticon-024-towel"></i>
                        <h4>Laundry</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna.</p>
                    </div>
                </div> -->
                <!-- <div class="col-lg-6 col-sm-6">
                    <div class="service-item">
                        <i class="flaticon-044-clock-1"></i>
                        <h4>Hire Driver</h4>
                        <p>Effortless Exploration : Hire Professional Drivers for Your Alibag Adventure.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6">
                    <div class="service-item">
                        <i class="flaticon-012-cocktail"></i>
                        <h4>Bar & Drink</h4>
                        <p>On additional Cost we will drop to your doorstep beverages.</p>
                    </div>
                </div> -->
                <?php } ?>
            </div>
        </div>
    </section>
    <?php } else {
	    echo "No record found";
    }
    ?>
    <!-- Services Section End -->

    <!-- Home Room Section Begin -->
            <?php 
            $query = "SELECT * FROM rooms";
            $query_run = mysqli_query($con, $query);

            if (mysqli_num_rows($query_run) >0){ ?>
            <div class="container-fluid">
            <div class="hp-room-items">
            <div class="row">
            <?php foreach ($query_run as $row){ 
            // echo "<pre>";
            // print_r($row['head']);    
            ?>
                <div class="col-lg-3 col-md-6">
                <div class="hp-room-item"><img src="<?php echo $row['img'];?>" alt="">
                <!-- <img src="<?php //echo $row['img']; ?>" alt=" "> -->
                <?php
                //echo $row['head'];
                ?>    
                <!-- <img class="card-img-top img-fluid" src="//placehold.it/500x200" alt="Card image cap"> -->
                <div class="hr-text">
                                <input type="hidden" id="<?php echo $row['id'];?>">
                                <h3><?php echo $row['head'];?></h3>
                                <h3><?php echo $row['fee'];?> per head<span>/Pernight</span></h3>
                                <table>
                                    <tbody>
                                        <tr>
                                            <td class="r-o">Size:</td>
                                            <td><?php echo $row['size'];?></td>
                                        </tr>
                                        <tr>
                                            <td class="r-o">Capacity:</td>
                                            <td><?php echo $row['capacity'];?></td>
                                        </tr>
                                        <tr>
                                            <td class="r-o">Bed:</td>
                                            <td><?php echo $row['bed'];?></td>
                                        </tr>
                                        <tr>
                                            <td class="r-o">Services:</td>
                                            <td><?php echo $row['services'];?></td>
                                        </tr>

                                    </tbody>
                                </table>
                                <a href="rooms-details.php?id=<?php echo htmlentities ($row['id']);?>"  class="primary-btn">More Details</a>
                            </div><!-- /card-footer -->
            </div><!-- /card -->
        </div><!-- /col-4 -->

	<?php } ?>     
	</div><!-- /row -->
    </div>
    </div>
    <!-- /container -->
    <?php } else {
	    echo "No record found";
    }
    ?>
    
    <!-- Home Room Section End -->

    <!-- Testimonial Section Begin -->
    <?php 
    $query = "SELECT * FROM review";
    $query_run = mysqli_query($con, $query);

    if (mysqli_num_rows($query_run) >0){ ?>
    <section class="testimonial-section spad">
        <div class="container">
            
            <div class="row">
            
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>Testimonials</span>
                        <h2>What Customers Say?</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="testimonial-slider owl-carousel">
                        <div class="ts-item">
                        <?php foreach ($query_run as $row) {?>
                            <p>After a construction project took longer than expected, my husband, my daughter and I
                                needed a place to stay for a few nights. As a Chicago resident, we know a lot about our
                                city, neighborhood and the types of housing options available and absolutely love our
                                vacation at Sona Hotel.</p>
                            <div class="ti-author">
                                <div class="rating">
                                    <?php if($row['rev_star'] == 3){
                                    ?>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <?php }
                                    else if($row['rev_star'] == 4)
                                    {
                                    ?>    
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <?php }
                                    else
                                    {
                                    ?>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <?php }
                                    ?>
                                </div>
                                <h5><?php echo $row['rev_name'];?></h5>
                            </div>
                            <!-- <img src="img/testimonial-logo.png" alt=""> -->
                            <p><?php echo $row['rev_source'];?></p>
                            <?php } ?>
                        </div>
                        <!-- <div class="ts-item">
                            <p>After a construction project took longer than expected, my husband, my daughter and I
                                needed a place to stay for a few nights. As a Chicago resident, we know a lot about our
                                city, neighborhood and the types of housing options available and absolutely love our
                                vacation at Sona Hotel.</p>
                            <div class="ti-author">
                                <div class="rating">
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star-half_alt"></i>
                                </div>
                                <h5> - Aniket</h5>
                            </div>
                            <img src="img/testimonial-logo.png" alt="">
                        </div> -->
                    </div>
                </div>
                
            </div>
            
        </div>
    </section>
    <?php } 
    else
    {
        echo 'No record found';
    }
    ?>
    <!-- Testimonial Section End -->

    <!-- Blog Section Begin -->
    <?php 
    $query = "SELECT * FROM blog";
    $query_run = mysqli_query($con, $query);

    if (mysqli_num_rows($query_run) >0){ ?>
    <section class="blog-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>Hotel News</span>
                        <h2>Our Blog & Event</h2>
                    </div>
                </div>
            </div>
            <div class="row">
            <?php foreach ($query_run as $row){ ?>    
                <div class="col-lg-4 mobil">
                
                    <div class="blog-item"><img src="<?php echo $row['img'];?>" alt="">
                        <div class="bi-text">
                            <span class="b-tag"><?php echo $row['label'];?></span>
                            <h4><a href="blog-details.php?editid=<?php echo htmlentities ($row['id']);?>"><?php echo $row['title'];?></a></h4>
                            <div class="b-time"><i class="icon_clock_alt"></i><?php echo $row['dt'];?></div>
                        </div>
                    </div>
                
                
                </div>
                <?php }
                ?>
                </div>
            </div>
    </section>
    <?php } 
    else
    {
        echo 'No record found';
    }
    ?>
    <!-- Blog Section End -->

    <!-- Ads Section -->
    <section class="comon_section ad_section_2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="ads text-center">
                            <a href="#"><img src="img/adbanner.jpg" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Ads Section -->

    <!-- Footer Section Begin -->
    <footer class="footer-section">
        <div class="container">
            <div class="footer-text">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="ft-about">
                            <div class="logo">
                                <a href="#">
                                    <!-- <img src="img/footer-logo.png" alt=""> -->
                                </a>
                            </div>
                            <p>We inspire and reach millions of travelers<br /> across 90 local websites</p>
                            <div class="fa-social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <!-- <a href="#"><i class="fa fa-tripadvisor"></i></a> -->
                                <a href="#"><i class="fa fa-instagram"></i></a>
                                <a href="#"><i class="fa fa-youtube-play"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 offset-lg-1">
                        <div class="ft-contact">
                            <h6>Contact Us</h6>
                            <ul>
                                <li></li>
                                <li>Staycation-alibag@gmail.com</li>
                                <li>Borivali west Mumbai</li>
                            </ul>
                        </div>
                    </div>
                    <!-- <div class="col-lg-3 offset-lg-1">
                        <div class="ft-newslatter">
                            <h6>New latest</h6>
                            <p>Get the latest updates and offers.</p>
                            <form action="#" class="fn-form">
                                <input type="text" placeholder="Email">
                                <button type="submit"><i class="fa fa-send"></i></button>
                            </form>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
        <div class="copyright-option">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <ul>
                            <li><a href="./contact.php">Contact</a></li>
                            <li><a href="#">Terms of use</a></li>
                            <li><a href="#">Privacy</a></li>
                            <!-- <li><a href="#">Environmental Policy</a></li> -->
                        </ul>
                    </div>
                    <div class="col-lg-5">
                        <div class="co-text"><p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p></div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Search model Begin -->
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch"><i class="icon_close"></i></div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here.....">
            </form>
        </div>
    </div>
    <!-- Search model end -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>