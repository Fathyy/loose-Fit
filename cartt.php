<style>
<?php include 'style.css'; ?>
</style>

<?php

session_start();

require_once('CreateDb.php');
require_once('component.php');

$db= new CreateDb(dbname:"Productdb", tablename:"Producttb");

if(isset($_POST['remove'])){
    if($_GET['action'] == 'remove'){
        foreach($_SESSION['cart'] as $key => $value){
            if($value['product_id'] == $_GET['id']){
                unset($_SESSION['cart'][$key]);
                echo "<script>alert('Product has been removed.. !')</script>";
                echo "<script>window.location='cartt.php'</script>";
            }
        }
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
<body class="bg-light">
    <?php
    require_once('header.php');
    ?>
    
    <div class="container-fluid">
        <div class="row px-5">
            <div class="col-md-7">
                <div class="shopping-cart">
                    <h6>My Cart</h6>
                    <hr>

                    <?php
                    $total=0;
                    if(isset($_SESSION['cart'])){
                        $product_id=array_column($_SESSION['cart'], "product_id");

                    $result=$db->getData();
                    while($row = mysqli_fetch_assoc($result)){
                        foreach($product_id as $id){
                            if($row['id'] == $id){
                                cartElement($row['product_image'], $row['product_name'], $row['product_price'], $row['id']);
                                $total=$total+(int)$row['product_price'];
                            }
                        }
                    }
                    }
                    else{
                       echo "<h5>cart is empty</h5>";
                    }
                    
                    ?>
                    
                </div>
            </div>


            <div class="col-md-5 offset-md-1 border-rounded mt-5 bg-white h-25">
                <div class="pt-4">
                    <h6>PRICE DETAILS</h6>
                    <hr>
                    <div class="row price-details">
                        <div class="col-md-6">
                            <?php
                            if(isset($_SESSION['cart'])){
                                $count=count($_SESSION['cart']);
                                echo '<h6>Price($count items)</h6>';
                            }
                            else{
                                echo '<h6>Price(0 items)</h6>';
                            }

                            ?>
                            <h6>Delivery charges</h6>
                            <hr>
                            <h6>Amount Payable</h6>
                        </div>

                        <div class="col-md-6">
                            <h6>Ksh<?php echo $total;?></h6>
                            <h6 class="text-success">FREE</h6>
                            <hr>
                            <h6>Ksh<?php
                            echo $total
                            ?>

                            </h6>

                        </div>
                        
                        <form action="stk_initiate.php" method="post">
                            <input type="hidden" value="<?php echo $total;?>" name="total">
                        <input type="submit" name="checkout" class="btn-large btn btn-primary" value="proceed to checkout">
                        </form>
                    </div> 
                </div>
            </div>
        </div>

    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>      
</body>
</html>