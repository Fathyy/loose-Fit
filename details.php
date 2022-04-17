<style>
<?php include 'style.css'; ?>
</style>

<?php
include('db_connect.php');

// check GET request id parameter
if(isset($_GET['id'])){
  $id = mysqli_real_escape_string($connection, $_GET['id']);

//make sql
$sql = "SELECT * FROM products WHERE id =$id";

// get the query result
$result = mysqli_query($connection, $sql);

// fetch result in array format
$product = mysqli_fetch_assoc($result);
mysqli_free_result($result);
mysqli_close($connection);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/ed20622ed8.js" crossorigin="anonymous"></script>
</head>
<body>
  <!-- navbar begins -->
<section class="top-navbar-header">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Loose Fit</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav ps-5 m-auto">
        <li class="nav-item ps-5">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item ps-5">
          <a class="nav-link" href="#">Contact</a>
        </li>
        <li class="nav-item ps-5">
          <a class="nav-link" href="#">Blog</a>
        </li>
        <li class="nav-item ps-5 dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Shop
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="#">Office Wear</a></li>
            <li><a class="dropdown-item" href="#">Casual Wear</a></li>
            <li><a class="dropdown-item" href="#">Accesseories</a></li>
            <li><a class="dropdown-item" href="#">Shoes</a></li>
          </ul>
        </li>
      </ul>
      <!-- right navbar section -->
      <div class="login-signup ps-5">
      <a href="Login.php">Login</a>
      <!-- signup section -->
      <a href="signup.php">Sign Up</a>
       </div>
     </div>
  </div>

</nav>
</section>

    
<!-- navbar ends  -->
<div class="container py-5 image-details">
  <?php if($product): ?>
    <div class="image-content">
    <img src="<?php echo htmlspecialchars($product['image']);?>" alt="">
    </div>
    <div class="left-content">
    <h4><?php echo htmlspecialchars($product['title']);?></h4>
    <h5><?php echo htmlspecialchars($product['price']);?></h5>
    <h5><?php echo htmlspecialchars($product['Brand name']);?></h5>
    <h5><?php echo htmlspecialchars($product['Description']);?></h5>
    </div>


      <?php endif; ?>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>  
</body>
</html>