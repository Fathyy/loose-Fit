<style>
<?php include 'style.css'; ?>
</style>
<?php
function component($productname, $productprice,$productimage, $productid){
    $element="
    <div class='col-sm-6 col-md-4 my-3 my-md-0'>
    <form action='newindex.php' method='post'>
                    <div class='card-shadow'>
                        <div>
                            <img src='$productimage' class='bag-two' alt='image1' card-img-top' w-10 h-5 >
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


function cartElement($productimg, $productname, $productprice, $productid){
    $element="

    <form action='cartt.php?action=remove&id=$productid' method=\'post\' class=\'cart-items\'>
                      <div class='border-rounded'>
                          <div class='row bg-white'>
                              <div class='col-md-3 ps-0'>
                                  <img src='$productimg' alt='image1' class='img-fluid'>
                              </div>


                              <div class='col-md-6'>
                                  <h5 class='pt-2'>$productname</h5>
                                  <small class='text-secondary'>Seller:Perfect Fittings</small>
                                  <h5 class='pt-2'>$productprice</h5>
                                  <button type='submit' class='btn btn-warning'>Save for later</button>
                                  <button type='submit' class='btn btn-danger mx-2' name='remove'>Remove</button>
                              </div>


                              <div class='col-md-3 py-5'>
                                  <div>
                                      <button type='button' class='btn bg-light border rounded-circle'><i class='fa-solid fa-minus'></i></button>
                                      <input type='text' value=1 class='form-control w-25 d-inline'>
                                      <button type='button' class='btn bg-light border rounded-circle'><i class='fa-solid fa-plus'></i></button>
                                  </div>


                              </div>

                          </div>
                      </div>  
                    </form>
    
    
    ";
    echo $element;
}
