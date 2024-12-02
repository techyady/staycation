<?php
include('admin/dbconnection.php');
  	$eid=$_GET['id'];
    $ret=mysqli_query($con,"SELECT * FROM rooms WHERE id='$eid'");
    //echo "SELECT * FROM rooms WHERE id='$eid'";
    $cnt=1;
    //$row = mysqli_fetch_array($ret);
  	//Getting Post Values



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
        .hp-room-items .hp-room-item .hr-text {
            bottom: -520px;
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
                                            <li><a href="./ket_photography/index.php" target="_blank">Photographer</a></li>
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
                        <h2>Our Rooms</h2>
                        <div class="bt-option">
                            <a href="./home.php">Home</a>
                            <span>Rooms</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section End -->

    <!-- Room Details Section Begin -->
    <section class="room-details-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                <!-- <?php
                //$eid=$_GET['id'];
                //$ret=mysqli_query($con,"select * from review where ID='$eid'");
                ?> -->
                    <div class="room-details-item">
                        <?php while ($row=mysqli_fetch_array($ret)) {
                        ?>

                        <img src="<?php echo $row['room_detail_img'];?>" alt="">
                        <div class="rd-text">
                            <div class="rd-title">
                                <h3><?php echo $row['head'];?></h3>
                                <!-- <div class="rdt-right">
                                    <div class="rating">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star-half_alt"></i>
                                    </div>
                                    <a href="#">Booking Now</a>
                                </div> -->
                            </div>
                            <h2><?php echo $row['fee'];?><span>/Pernight</span></h2>
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
                            <p class="f-para"><?php echo $row['details'];?></p>
                            
                        </div>
                        <?php } ?>
                    </div>
                    <!-- <div class="rd-reviews">
                        <h4>Reviews</h4>
                        <div class="review-item">
                            <div class="ri-pic">
                                <img src="img/room/avatar/avatar-1.jpg" alt="">
                            </div>
                            <div class="ri-text">
                                <span>27 Aug 2019</span>
                                <div class="rating">
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star-half_alt"></i>
                                </div>
                                <h5>Brandon Kelley</h5>
                                <p>Neque porro qui squam est, qui dolorem ipsum quia dolor sit amet, consectetur,
                                    adipisci velit, sed quia non numquam eius modi tempora. incidunt ut labore et dolore
                                    magnam.</p>
                            </div>
                        </div>
                        <div class="review-item">
                            <div class="ri-pic">
                                <img src="img/room/avatar/avatar-2.jpg" alt="">
                            </div>
                            <div class="ri-text">
                                <span>27 Aug 2019</span>
                                <div class="rating">
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star-half_alt"></i>
                                </div>
                                <h5>Brandon Kelley</h5>
                                <p>Neque porro qui squam est, qui dolorem ipsum quia dolor sit amet, consectetur,
                                    adipisci velit, sed quia non numquam eius modi tempora. incidunt ut labore et dolore
                                    magnam.</p>
                            </div>
                        </div>
                    </div> -->
                    <!-- <div class="review-add">
                        <h4>Add Review</h4>
                        <form action="#" class="ra-form">
                            <div class="row">
                                <div class="col-lg-6">
                                    <input type="text" placeholder="Name*">
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" placeholder="Email*">
                                </div>
                                <div class="col-lg-12">
                                    <div>
                                        <h5>You Rating:</h5>
                                        <div class="rating">
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star-half_alt"></i>
                                        </div>
                                    </div>
                                    <textarea placeholder="Your Review"></textarea>
                                    <button type="submit">Submit Now</button>
                                </div>
                            </div>
                        </form>
                    </div> -->
                </div>
                <?php
                // Define your dynamic options (e.g., for guests and rooms)
                $guestOptions = ['1 Adult', '2 Adults', '3 Adults', '4 Adults'];
                $roomOptions = ['1 Room', '2 Rooms', '3 Rooms', '4 Rooms'];

                // Process form submission
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    // Handle form data
                    $checkIn = $_POST['date-in'];
                    $checkOut = $_POST['date-out'];
                    $selectedGuest = $_POST['guest'];
                    $selectedRoom = $_POST['room'];
                    
                    // echo $roominqsql = "insert into room_inquiry(checkIn,checkOut,guest,room,room_id) 
                    // values (".$checkIn.",".$checkOut.",".$selectedGuest.",".$selectedRoom.",".$eid.")";
                    // exit();
                    // $resultroominq = mysqli_query($con,$roominqsql);
                    // die();
                    // Process the form data as needed (e.g., store in database)
                    // You can add your database logic here
                    // Make sure to sanitize and validate input before using it in your application
                }            

                ?>
                <div class="col-lg-4">
                    <div class="room-booking">
                        <h3>Your Reservation</h3>
                        <form id="room-check-in-form">
                            <div class="check-date">
                                <label for="date-in">Check In:</label>
                                <input type="text" class="date-input" id="date-in" name="date-in">
                                <i class="icon_calendar"></i>
                            </div>
                            <div class="check-date">
                                <label for="date-out">Check Out:</label>
                                <input type="text" class="date-input" id="date-out" name="date-out">
                                <i class="icon_calendar"></i>
                            </div>
                            <div class="select-option">
                                <label for="guest">Guests:</label>
                                <select id="guest" name="guest">
                                    <?php
                                    foreach ($guestOptions as $option) {
                                        echo "<option value='$option'>$option</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="select-option">
                                <label for="room">Room:</label>
                                <select id="room" name="room">
                                    <?php
                                    foreach ($roomOptions as $option) {
                                        echo "<option value='$option'>$option</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                            <input type="hidden" id="dynamic-hidden-value" name="dynamic-hidden-value" value="<?php echo $eid; ?>">
                            <button type="submit" name="submit" id="submit-btn">Check Availability</button>
                        </form>
                        <div id="success-message" style="display: none;">Form submitted successfully Will get back to you!</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Room Details Section End -->
    <!-- Home Room Section Begin -->
    <?php 
            $query = "SELECT * FROM rooms";
            $query_run = mysqli_query($con, $query);

            if (mysqli_num_rows($query_run) >0){ ?>
            <div class="container-fluid">
                <!-- <h1>Other Options's</h1> -->
            <div class="hp-room-items">
            <div class="row">
            <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <h2>Other Option's</h2>
                    </div>
                </div>
            <?php foreach ($query_run as $row){ 
            // echo "<pre>";
            // print_r($row['head']);    
            ?>
                <div class="col-lg-3 col-md-6">
                <div class="hp-room-item"><img src="<?php echo $row['img'];?>" alt="">
                <?php
                //echo $row['head'];
                ?>    
                <!-- <img class="card-img-top img-fluid" src="//placehold.it/500x200" alt="Card image cap"> -->
                <div class="hr-text">
                                <input type="hidden" id="<?php echo $row['id'];?>">
                                <h3><?php echo $row['head'];?></h3>
                                <h2><?php echo $row['fee'];?> per head<span>/Pernight</span></h2>
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
document.getElementById('room-check-in-form').addEventListener('submit', function(event) {
    event.preventDefault();

    // Prepare form data
    const formData = new FormData(this);

    // Send form data using AJAX
    fetch('process-form.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.text())
    .then(data => {
        console.log(data); // Handle response from the server
        document.getElementById('success-message').style.display = 'block'; // Show success message
        // window.location.reload();
    })
    .catch(error => {
        console.error('Error:', error);
    });
});
</script>