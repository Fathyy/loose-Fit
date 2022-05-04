<style>
<?php include 'style.css'; ?>
</style>

<?php
session_start();
require_once('createdb.php');
require_once('component.php');


// create instance of CreateDb class
$database = new CreateDb(dbname:"Productdb", tablename:"Producttb");

if(isset($_POST['name'])){

  if(isset($_SESSION['cart'])){
     $item_array_id =array_column($_SESSION['cart'], "product_id");
     
     if(in_array($_POST['product_id'], $item_array_id)){
         echo '<script> alert("Product is already added in the cart..!")</script>';
         echo "<script> window.location='newindex.php'</script>";
     }
     else{
         $count = count($_SESSION['cart']);
         $item_array=array(
             'product_id' =>$_POST['product_id']
         );
         $_SESSION['cart'][$count] = $item_array;
         
          
     }
  }
  else{
    $item_array= array(
        'product_id'=>$_POST['product_id']
    ); 
    // create new session variable
    $_SESSION['cart'][0] = $item_array;

  }  
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/ed20622ed8.js" crossorigin="anonymous"></script>
</head>
<body>
    <?php 
    require_once('header.php');
    
    ?>

       
   

    <div class="container">
        <div class="row text-center py-5">
          <?php
          $result = $database->getData();
          while($row = mysqli_fetch_assoc($result)){
              component($row['product_name'], $row['product_price'], $row['product_image'], $row['id']);
          }
          
          ?>  


            

            

        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>  
</body>
</html>