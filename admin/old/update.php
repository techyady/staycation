<?php
include('config.php');

if(isset($_POST['update']))
{
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $gender = $_POST['gender'];
    $userid = $_POST['user_id'];

    $sql = "UPDATE `signup` SET `firstname`= '$firstname',`lastname` = '$lastname',`email` = '$email',`password` = '$password',`gender` = '$gender' WHERE `id` = '$userid'";
    //echo "<br>Query :".$sql."<br>";
    $result = $conn->query($sql);
    if($result == TRUE)
    {
        echo "Record updated sucessfully";
        header("Location: view.php");
    }
    else
    {
        echo "Error".$sql."<br>".$conn->error;
    }
}



if(isset($_GET['id']))
{
    $userid = $_GET['id'];
    //echo "User ID :".$userid;
    $sql = "SELECT * FROM `signup` where `id` = $userid";
    $result = $conn->query($sql);

    if($result->num_rows > 0){
        while($row = $result->fetch_assoc())
        {
            $first_name = $row['firstname'];

            $lastname = $row['lastname'];

            $email = $row['email'];

            $password  = $row['password'];

            $gender = $row['gender'];

            $id = $row['id'];
        }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>View page</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2>Update</h2>
            <form action="" method="POST">
                <fieldset>
                    <legend>Personal Info :</legend>
                    First Name :<br>
                    <input type="text" name="firstname" value="<?php echo $first_name; ?>">
                    <input type="hidden" name="user_id" value="<?php echo $id;?>">
                    <br>
                    Last Name :<br>
                    <input type="text" name="lastname" value="<?php echo $lastname;?>">
                    <br>
                    Email : <br>
                    <input type="text" name="email" value="<?php echo $email;?>">
                    <br>
                    Password : <br>
                    <input type="password" name="password" value="<?php echo $password?>">
                    <br>
                    Gender : <br>
                    <input type="radio" name="gender" value="Male" <?php if($gender == 'male'){echo "checked";}?>>Male
                    <input type="radio" name="gender" value="Female" <?php if($gender == 'female'){echo "checked";}?>>Female
                    <br><br>
                    <input type="submit" name="update" value="Update">

                </fieldset>
            </form>
        
    </div>
</body>
</html>
<?php

} else{ 

    header('Location: view.php');

} 

}

?> 