<?php
session_start();
?>
<?php
include('dbconnection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Read</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
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
.table-responsive {
    margin: 30px 0;
}
.table-wrapper {
    min-width: 1000px;
    background: #fff;
    padding: 20px;
    box-shadow: 0 1px 1px rgba(0,0,0,.05);
}
.table-title {
    font-size: 15px;
    padding-bottom: 10px;
    margin: 0 0 10px;
    min-height: 45px;
}
.table-title h2 {
    margin: 5px 0 0;
    font-size: 24px;
}
.table-title select {
    border-color: #ddd;
    border-width: 0 0 1px 0;
    padding: 3px 10px 3px 5px;
    margin: 0 5px;
}
.table-title .show-entries {
    margin-top: 7px;
}
.search-box {
    position: relative;
    float: right;
}
.search-box .input-group {
    min-width: 200px;
    position: absolute;
    right: 0;
}
.search-box .input-group-addon, .search-box input {
    border-color: #ddd;
    border-radius: 0;
}
.search-box .input-group-addon {
    border: none;
    border: none;
    background: transparent;
    position: absolute;
    z-index: 9;
}
.search-box input {
    height: 34px;
    padding-left: 28px;     
    box-shadow: none !important;
    border-width: 0 0 1px 0;
}
.search-box input:focus {
    border-color: #3FBAE4;
}
.search-box i {
    color: #a0a5b1;
    font-size: 19px;
    position: relative;
    top: 8px;
}
table.table tr th, table.table tr td {
    border-color: #e9e9e9;
}
table.table th i {
    font-size: 13px;
    margin: 0 5px;
    cursor: pointer;
}
table.table td:last-child {
    width: 130px;
}
table.table td a {
    color: #a0a5b1;
    display: inline-block;
    margin: 0 5px;
}
table.table td a.view {
    color: #03A9F4;
}
table.table td a.edit {
    color: #FFC107;
}
table.table td a.delete {
    color: #E34724;
}
table.table td i {
    font-size: 19px;
}    
.pagination {
    float: right;
    margin: 0 0 5px;
}
.pagination li a {
    border: none;
    font-size: 13px;
    min-width: 30px;
    min-height: 30px;
    padding: 0 10px;
    color: #999;
    margin: 0 2px;
    line-height: 30px;
    border-radius: 30px !important;
    text-align: center;
}
.pagination li a:hover {
    color: #666;
}   
.pagination li.active a {
    background: #03A9F4;
}
.pagination li.active a:hover {        
    background: #0397d6;
}
.pagination li.disabled i {
    color: #ccc;
}
.pagination li i {
    font-size: 16px;
    padding-top: 6px
}
.hint-text {
    float: left;
    margin-top: 10px;
    font-size: 13px;
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
        <?php
        if(isset($_SESSION["name"])) {
        ?>
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="master.php">Locker Master</a>
        </li>
        <!-- <li class="nav-item">
        <a class="nav-link" href="upload.php">Upload File</a>
        </li> -->
        <li class="nav-item">
        <a class="nav-link" href="list_text.php">Text List</a>
        </li>
      <!-- <li class="nav-item">
        <a class="nav-link" href="login.php">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="register.php">Registration</a>
      </li> -->
      <li class="nav-item">
        <div class="nav-link">Welcome <?php echo $_SESSION["name"]; ?> <a href="logout.php" tite="Logout">Logout.</a></div>
       </li>
      <?php 
        }
      ?>
    </ul>
    </div>
</nav>    
<div class="container-xl">
    <div class="table-responsive">
        <div class="table-wrapper">


<div class="signup-form">
<form  method="POST">
<?php
$vid=$_GET['viewid'];
$ret=mysqli_query($con,"select * from employee_details where ID =$vid");
while ($row=mysqli_fetch_array($ret)) {
?>

<h2>User Info </h2>

<div class="form-group">Name :
<!-- <div class="row">Name -->
<!-- <div class="col">
<input type="number" class="form-control" name="locker_no" value="<?php//  echo $row['locker_no'];?>" required="true" readonly></div> -->
<!-- <div class="col"> -->
<input type="text" class="form-control" name="name" value="<?php  echo $row['name'];?>" required="true" readonly>
<!-- </div> -->
</div>          
<!-- </div> -->
<div class="form-group">Postion :
<input type="text" class="form-control" name="position" value="<?php  echo $row['position'];?>" required="true" readonly>
</div>
<div class="form-group">Department :
<input type="text" class="form-control" name="department" value="<?php  echo $row['department'];?>" required="true" readonly>
</div>

<div class="form-group">DOB :
<textarea type="text" class="form-control" name="dob" required="true" readonly><?php  echo $row['dob']; ?></textarea>
</div>        
<?php 
}
?>
<!-- <div class="form-group">
<button type="submit" class="btn btn-success btn-lg btn-block" name="submit">Update</button>
</div> -->
</form>

</div>
       
</div>
</div>
</div>     
</body>
<footer class="bg-light text-center text-lg-start">
  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2023 Copyright:
    <a class="text-dark" href="#">AVG.com</a>
  </div>
  <!-- Copyright -->
</footer>
</html>