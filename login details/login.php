<?php
include('../db_connect.php');
include('functions.php');

// session_id("mainID"); 
session_start();



// if(!isset($_SESSION['login'])) {
//     $_SESSION['login'] = false;
//   }

//   if(!empty($_SESSION['active'])){
//     if (basename($_SERVER['PHP_SELF'])!= 'login.php'){
//         header('location: login.php');
//     }
//     }



$user_data = check_login($connection);
if($_SERVER['REQUEST_METHOD'] == "POST"){
    // something was posted

    $user_name = $_POST['user_name'];
    $password = $_POST['password'];

    if(!empty($user_name) && !empty($password) && !is_numeric($user_name)){
        // read from database
       
        $query = "SELECT * FROM people WHERE user_name = '$user_name' limit 1";
        
        $result = mysqli_query($connection, $query);

        if($result){
            if($result && mysqli_num_rows($result) > 0)
        {
            $user_data = mysqli_fetch_assoc($result);
            if($user_data['password'] === $password){

                $_SESSION['user_id'] = $user_data['user_id'];
                header("Location: index.php");
                 die;

            }
        }
        }
      echo "wrong username and password";  
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
    <title>Document</title>
</head>
<body>
    <div id="box">
        <form action="" method="post">
            <div class="login-text">Login</div>
            <input type="text" name="user_name" id="text"> <br><br>
            <input type="password" name="password" id="text"> <br><br>

            <input type="submit" value="Login" id="button"><br><br>
            <a href="signup.php">Click to SignUp</a> <br><br>
        </form>

    </div>
</body>
</html>