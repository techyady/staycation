<?php
session_start();
if(!isset($_SESSION['valid'])) {
    header('Location: index.php');			
}
else
{
//Database Connection
include('dbconnection.php');
if(isset($_POST['submit']))
  {
  	$eid=$_GET['editid'];
  	//Getting Post Values
  	$rev_desc = $_POST['rev_desc'];
	$rev_star = $_POST['rev_star'];
	$rev_name = $_POST['rev_name'];
	$rev_source = $_POST['rev_source'];
	// $bed = $_POST['bed'];
	// $services = $_POST['services'];
	// $details = $_POST['details'];

    //Query for data updation
     $query=mysqli_query($con, "UPDATE review SET rev_desc = '$rev_desc',rev_star = '$rev_star',rev_name = '$rev_name',rev_source = '$rev_source' WHERE id = '$eid'");
     //echo "UPDATE rooms SET head = '$head',fee = '$fee',size = '$size',capacity = '$capacity',bed = '$bed', services= '$services' WHERE id = '$eid'";
     
    if ($query) {
    echo "<script>alert('You have successfully update the data');</script>";
    echo "<script type='text/javascript'> document.location ='review.php'; </script>";
  }
  else
    {
      echo "<script>alert('Something Went Wrong. Please try again');</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
<title>Review</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>
body {
	color: #fff;
	background: #63738a;
	font-family: 'Roboto', sans-serif;
}
.form-control {
	height: 40px;
	box-shadow: none;
	color: #969fa4;
}
.form-control:focus {
	border-color: #5cb85c;
}
.form-control, .btn {        
	border-radius: 3px;
}
.signup-form {
	width: 450px;
	margin: 0 auto;
	padding: 30px 0;
  	font-size: 15px;
}
.signup-form h2 {
	color: #636363;
	margin: 0 0 15px;
	position: relative;
	text-align: center;
}
.signup-form h2:before, .signup-form h2:after {
	content: "";
	height: 2px;
	width: 30%;
	background: #d4d4d4;
	position: absolute;
	top: 50%;
	z-index: 2;
}	
.signup-form h2:before {
	left: 0;
}
.signup-form h2:after {
	right: 0;
}
.signup-form .hint-text {
	color: #999;
	margin-bottom: 30px;
	text-align: center;
}
.signup-form form {
	color: #999;
	border-radius: 3px;
	margin-bottom: 15px;
	background: #f2f3f7;
	box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
	padding: 30px;
}
.signup-form .form-group {
	margin-bottom: 20px;
}
.signup-form input[type="checkbox"] {
	margin-top: 3px;
}
.signup-form .btn {        
	font-size: 16px;
	font-weight: bold;		
	min-width: 140px;
	outline: none !important;
}
.signup-form .row div:first-child {
	padding-right: 10px;
}
.signup-form .row div:last-child {
	padding-left: 10px;
}    	
.signup-form a {
	color: #fff;
	text-decoration: underline;
}
.signup-form a:hover {
	text-decoration: none;
}
.signup-form form a {
	color: #5cb85c;
	text-decoration: none;
}	
.signup-form form a:hover {
	text-decoration: underline;
} 
footer.bg-light.text-center.text-lg-start
{
    bottom: 0;
    position: absolute;
    width: -webkit-fill-available;
}  
</style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
  <ul class="navbar-nav mr-auto">
<li class="nav-item active">
<a class="nav-link" href="main.php">Home <span class="sr-only">(current)</span></a>
</li>
<!-- <li class="nav-item">
<a class="nav-link" href="master.php">Banner</a>
</li> -->
<li class="nav-item">
<a class="nav-link" href="room_inquiry.php">Room Inquiry</a>
</li>
<li class="nav-item">
<a class="nav-link" href="about_us.php">About Us</a>
</li>
<li class="nav-item">
<a class="nav-link" href="services.php">services</a>
</li>
<li class="nav-item">
<a class="nav-link" href="main.php">Rooms</a>
</li>
<li class="nav-item">
<a class="nav-link" href="room_availibility.php">Rooms Availability</a>
</li>
<li class="nav-item">
<a class="nav-link" href="review.php">Review</a>
</li>
<li class="nav-item">
<a class="nav-link" href="blog.php">Blog</a>
</li>
<li class="nav-item">
<a class="nav-link" href="contact.php">Contact Form</a>
</li>
<li class="nav-item">
<div class="nav-link"><b>Welcome <?php echo $_SESSION["username"]; ?> <a href="logout.php" tite="Logout">Logout.</a></b></div>
</li>
<!-- <li class="nav-item">
<a class="nav-link" href="login.php">Login</a>
</li>
<li class="nav-item">
<a class="nav-link" href="register.php">Registration</a>
</li> -->

</ul>
    </div>
</nav>	
<div class="signup-form">
<form  method="POST">
 <?php
$eid=$_GET['editid'];
$ret=mysqli_query($con,"select * from review where ID='$eid'");
while ($row=mysqli_fetch_array($ret)) {
?>
		<h2>Update </h2>
		<p class="hint-text">Update your info.</p>
        <div class="form-group">
			<div class="row">
				<div class="col"><input type="text" class="form-control" name="rev_name" value="<?php  echo $row['rev_name'];?>" required="true"></div>
				<div class="col"><input type="text" class="form-control" name="rev_star" value="<?php  echo $row['rev_star'];?>" required="true"></div>
			</div>        	
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="rev_source" value="<?php  echo $row['rev_source'];?>" required="true">
        </div>
        <div class="form-group">
            <textarea type="text" class="form-control" name="rev_desc" required="true"><?php  echo $row['rev_desc'];?></textarea>
        </div>        
      <?php 
			}
			?>
		<div class="form-group">
            <button type="submit" class="btn btn-success btn-lg btn-block" name="submit">Update</button>
        </div>
    </form>

</div>
</body>
<footer class="bg-light text-center text-lg-start">
  <!-- Copyright -->
  <!-- <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2023 Copyright:
    <a class="text-dark" href="#">AVG.com</a>
  </div> -->
  <!-- Copyright -->
</footer>
</html>
<?php
}
?>