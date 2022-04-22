<?php
session_start();

include('../db_connect.php');
include('functions.php');

if($_SERVER['REQUEST_METHOD'] == "POST"){
    // something was posted

    $user_name = $_POST['user_name'];
    $password = $_POST['password'];

    if(!empty($user_name) && !empty($password) && !is_numeric($user_name)){
        // save to database
        $user_id = random_num(20);
        $query = "INSERT INTO people (user_id, user_name, password) VALUES ('$user_id', '$user_name', '$password')";
        
        mysqli_query($connection, $query);
        header("Location: login.php");
        die;
    }
    else{
        echo "Please enter some valid information!";
    }

}


?>

<style>
<?php include 'login.css'; ?>
</style>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUp</title>
</head>
<body>
    <div id="box">
        <form action="" method="post">
            <div class="login-text">SignUp</div>
            <input type="text" name="user_name" id="text"> <br><br>
            <input type="password" name="password" id="text"> <br><br>

            <input type="submit" value="Signup" id="button"><br><br>
            <a href="login.php">Click to Login</a> <br><br>
        </form>

    </div>
</body>
</html>