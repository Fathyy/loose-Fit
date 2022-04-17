<style>
<?php include 'style.css'; ?>
</style>

<?php
include('db_connect.php');
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
    <!-- newsletter section begins -->
    
    <footer class="newsletter-form">
    <div class="container">
        <div class="row">
    <div class="col-sm-12 col-md-12 col-lg-6">
        <p>Subscribe to our newsletter and get 20% off your first purchase</p>
    </div>
    <div class="col-sm-12 col-md-12 col-lg-6">
    <form action="code.php" method="post" class="subscribe">
    <div class="form-group">
    <input type="email" class="form-control" name="email" placeholder="Your email">
  </div>
  <div class="subscribe-btn">
  <button type="submit" class="btn btn-success" name="subscribe">Subscribe</button>
  </div>
  </form>
  </div>
  </div>
  </div>
    
    </footer>
    <!-- newsletter section ends -->

    <!-- lower footer section begins -->
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-3">
                <h3>Loose Fit</h3>
                <ul>
               <li><i class="fa-brands fa-twitter"></i></li>
               <li><i class="fa-brands fa-linkedin"></i></li>
               <li><i class="fa-brands fa-instagram"></i></li>
               <li><i class="fa-brands fa-facebook"></i></li>
                </ul>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-3">
                <ul>
                    <li><a href="#">Categories</a></li>
                    <li><a href="#">Office Wear</a></li>
                    <li><a href="#">Casual</a></li>
                    <li><a href="#">Accessories</a></li>
                    <li><a href="#">Shoes</a></li>
                    
                </ul>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-3">
            <ul>
                    <li><a href="#">Information</a></li>
                    <li><a href="#">About us</a></li>
                    <li><a href="#">Contact us</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Orders and returns</a></li>
                     
                </ul>

            </div>
            <div class="col-sm-12 col-md-6 col-lg-3">
            <ul>
                    <li><a href="#">Service</a></li>
                    <li><a href="#">My account</a></li>
                    <li><a href="#">View Cart</a></li>
                    <li><a href="#">Wishlist</a></li>
                    <li><a href="#">Help</a></li>
                    
                </ul>

            </div>
        </div>
    </div>
    <!-- lower footer section ends -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>  
</body>
</html>