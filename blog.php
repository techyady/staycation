<?php
include('admin/dbconnection.php');

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
    <style>
        .grid-view .row {
            display: flex;
            flex-wrap: wrap;
        }

        .list-view .row {
            display: block;
        }

        .col-lg-4 {
            /* Add necessary styles for columns in list view */
        }
    </style>
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Offcanvas Menu Section Begin -->
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
                                <h2>Staycation_alibag</h2>
                                <!-- <img src="img/logo.png" alt=""> -->
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
                                    <li><a href="./pages.php">Hire</a>
                                        <ul class="dropdown">
                                            <li><a href="./ket_photography/index.html" target="_blank">Photographer</a></li>
                                            <!-- <li><a href="./blog-details.php">Blog Details</a></li> -->
                                            <!-- <li><a href="./room-details.php">Room Details</a></li>
                                            <li><a href="./blog-details.php">Blog Details</a></li> -->
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

    <!-- Breadcrumb Section Begin -->
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <h2>Blog</h2>
                        <div class="bt-option">
                            <a href="./index.php">Home</a>
                            <span>Blog Grid</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Button to toggle between grid and list views element.style {
    margin: 10px 10px 10px 175px;
 -->
    
    <!-- Breadcrumb Section End -->

    <!-- Blog Section Begin -->
    <?php 
            $query = "SELECT * FROM blog";
            $query_run = mysqli_query($con, $query);

            if (mysqli_num_rows($query_run) >0){ ?>
    <section class="blog-section blog-page spad">
        
        <div class="container grid-view" id="items-container">
        <!-- <button id="toggle-view-btn">Toggle View</button>
        <br>
        <br> -->
        
            <div class="row">
                
            <?php

            foreach ($query_run as $row){   
            ?> 
                <div class="col-lg-4 col-md-6">
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
    <?php 
    }
    else
    {
        echo "No Records Found";
    }
    ?>
    <!-- Blog Section End -->

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
<script>
    // alert(getElementById('toggle-view-btn'));
document.getElementById('toggle-view-btn').addEventListener('click', function() {
    
    const itemsContainer = document.getElementById('items-container');
    itemsContainer.classList.toggle('grid-view');
    itemsContainer.classList.toggle('list-view');
});
</script>