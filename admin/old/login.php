<?php
include 'config.php';
if (isset($_POST['sub']))
{
    $u = $_POST['user'];
    $p = $_POST['pass'];
    $s = "select * from login where username='$u' and password= '$p'";
    $qu = mysqli_query($conn, $s);
 
    //Here we check if our query is correct then databse have how many rows on o/p.
    if (mysqli_num_rows($qu) > 0)
    {
        $f = mysqli_fetch_assoc($qu);
 
        //Here we store the value ID on session for login and fetch data of same user who is logged in.
        $_SESSION['id'] = $f['id'];
 
        //if all conditions are correct then redirects to this page.
        header('location:home.php');
    }
    else
    {
        echo 'username or password does not exist';
    }
 
}
?>
<html>
 
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
 
<body>
	<form method="POST" enctype="multipart/form-data">
		<table>
			<tr>
				<td> Username
					<input type="text" name="user"> </td>
			</tr>
			<tr>
				<td> password
					<input type="password" name="pass"> </td>
			</tr>
			<tr>
				<td>
					<input type="submit" name="sub" value="submit"> </td>
			</tr>
		</table>
</body>
 
</html>