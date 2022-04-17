<?php
include 'db_connect.php';
// write query for all pizzas
$sql = 'SELECT title, image, price, id FROM products';
$result = mysqli_query($connection, $sql);
// fetch the resulting rows as an array
$products = mysqli_fetch_all($result, MYSQLI_ASSOC);
// free result from memory
mysqli_free_result($result);
// close connection
mysqli_close($connection);


 
 
?>
<style>
<?php include 'style.css'; ?>
</style>

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
    <!-- navbar ends -->

<?php
include 'introduction.php';
?>
   
   
   <section class="all-products">
   <h4 class="our-products">Our Products!</h4>
           <?php foreach($products as $product){ ?>
            <div class="wrapper">
             
               <div class="card">
                   <div class="card-content center">
                   <img src="<?php echo htmlspecialchars($product['image']);?>" alt="">
                       <h4><?php echo htmlspecialchars($product['title']);?></h4>
                       <h5><?php echo htmlspecialchars($product['price']);?></h5>
                       <div class="card-action btn btn-primary">
                       <a class="brand-text" href="details.php?id=<?php echo $product['id']?>">More</a> 
                      </div>
                       
                    </div>
                  
                   </div>

               </div> 
               </section>
            
            <?php } ?>

           
    

   
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
