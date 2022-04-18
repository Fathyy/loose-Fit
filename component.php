<?php
function component($productname, $productprice,$productimage, $productid){
    $element="
    <div class='col-sm-6 col-md-3 my-3 my-md-0'>
    <form action='newindex.php' method='post'>
                    <div class='card-shadow'>
                        <div>
                            <img src='$productimage' class='bag-two' alt='image1' class='img-fluid card-img-top' >
                        </div>
                        <div class='card-body'>
                            <h5 class='card-title'>$productname</h5>
                            <h6>
                            <i class='fa-solid fa-star'></i>  
                            <i class='fa-solid fa-star'></i>  
                            <i class='fa-solid fa-star'></i>  
                            <i class='fa-solid fa-star'></i>  
                            <i class='fa-solid fa-star'></i>  
                            </h6>
                            <p class='card-text'>
                                Some text to build on the card
                            </p>
                            <h5>
                                <small><s class='text-secondary'>Ksh500</s></small>
                               <span class='price'>$productprice</span> 
                            </h5>
                            <button type='submit' class='btn btn-warning my-3' name='name'>Add to Cart <i class='fa-solid fa-cart-shopping'></i></button>
                            <input type='hidden' name='product_id' value='$productid'>
                        </div>
                    </div>

                </form>
            </div>
            
    
    ";
    echo $element;
    
}

