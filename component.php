<?php
function component($productname, $productprice, $productimg){
  $element="
   <div class=\"col-md-3 col-sm-6-my-3 my-md-0\">
    <form action=\"product.php\" method=\"post\">
      <div class=\"card shadow\">
        <div>
          <img src=\"$productimg\" alt=\"image1\" class=\"img-fluid card-img-top\">
        </div>
        <div class=\"card-body\">
          <h5 class=\"card-title\">$productname</h5>
          <h6>
            <i class=\"fas fa-star\"></i>
             <i class=\"fas fa-star\"></i>
              <i class=\"fas fa-star\"></i>
               <i class=\"fas fa-star\"></i>
                <i class=\"far fa-star\"></i>

          </h6>
          <p class=\"card-text\">
            Product description
          </p>
          <h5>
            <small><s class=\"text-secondary\">N2500</s></small>
            <span class=\"price\">$productprice</span>
          </h5>
          <button type=\"submit\" class=\"btn btn-warning my-3\" name=\"add\">Add to Cart<i class=\"fas fa-shopping-cart\"></i></button>
  </div>
  </div>
  </form>
  </div>
  ";
  echo $element
 ?>
