<?php
include'config.php';
//here we check the id with session id which we get on the time of login
//$s="select*from reg where id='$_SESSION[id]'";
//$qu= mysqli_query($con, $s);
//$f=mysqli_fetch_assoc($qu);
?>
<html>
  <head>
  </head>
    <body>
    Dashboard
    <div class="col-lg-10">
                        <div class="nav-menu">
                            <nav class="mainmenu">
                                <ul>
                                    <li class="active"><a href="./banner.php">Banner</a></li>
                                    <li><a href="./rooms.php">Rooms</a></li>
                                    <li><a href="./about-us.php">About Us</a></li>
                                    <li><a href="./blog.php">Blog</a></li>
                                    <li><a href="./services.php">Services</a></li>
                                    <li><a href="./reviews.php">Reviews</a></li>
                                </ul>
                            </nav>
                            <div class="nav-right search-switch">
                                <i class="icon_search"></i>
                            </div>
                        </div>
                    </div>  
    </body>
</html>
