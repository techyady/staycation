<?php

include('config.php');

if(isset($_POST['submit']))
{
    $first_name = $_POST['firstname'];
    $last_name = $_POST['lastname'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $gender = $_POST['gender'];
    
    $sql = "INSERT INTO `signup` (`firstname`,`lastname`,`email`,`password`,`gender`) VALUES ('$first_name','$last_name','$email','$password','$gender')";
    //echo "SQL :".$sql."<br>";
    $result = $conn->query($sql);

    if($result == true)
    {
        echo "New record added succesfully";
        header("Location: view.php");
    }
    else
    {
        echo "Error".$sql."<br>".$conn->error;
    }
}



?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Create page</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css"> -->
</head>
    <body>
        <h2>Signup</h2>
        <!-- <a href="view.php" class="btn btn-success"><i class="fa fa-plus"></i>View Data</a> -->
        <form action="" method="POST">
            <fieldset >
                <legend>Personal Information </legend>
                First Name : <br>
                <input type="text" name="firstname">
                <br>
                Last Name : <br>
                <input type="text" name="lastname">
                <br>
                Email ID : <br>
                <input type="text" name="email">
                <br>
                Password : <br>
                <input type="password" name="password">
                <br>
                Gender : <br>
                <input type="radio" name="gender" value="male">Male
                <input type="radio" name="gender" value="female">Female
                <br>
                <br>
                <input type="submit" name="submit" value="submit">
            </fieldset>
        </form>
    </body>    

</html>    