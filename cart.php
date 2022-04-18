<?php
session_start();
include 'db_connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<?php
$total = 0;
$output = "";
$output = "
<table class='table table-bordered table-striped'>
<tr>
<th>Id</th>
<th>Item Name</th>
<th>Item Price</th>
<th>Item Quantity</th>
<th>Total price</th>
<th>Action</th>
<tr>
";

if(!empty($_SESSION['cart'])){

    foreach($_SESSION['cart'] as $key => $value){
        $output= "
        <tr>
        <td>".$value['id']. "</td>
        <td>".$value['title']. "</td>
        <td>".$value['price']. "</td>
        <td>".$value['quantity']. "</td>
        <td>".number_format($value['price'] * $value['quantity'], 2)."</td>
        <td>
        <a href = 'cart.php?action=removed%id=" .$value['id']. "'>
        <button class='btn btn-danger btn-block'>Remove</button>
        </a>

        </td>
        ";
      $total = $total + $value['quantity'] * $value['price'];

    }


$output .= "
<tr>
<td colspan='3'></td>
<td></b>Total Price</b></td>
<td>".number_format($total, 2)."</td>
</tr>
";
}
?> 

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>