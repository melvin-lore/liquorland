<?php

function component(){
    $element="

    <div class=\"col-md-3 col-sm-6 my-3 my-md-0\">
    <form action=\"test.php\" method=\"post\">
       <div class=\"card shadow\">
           <div>
               <img src=\"./images/havana.jpg\" alt=\"image1\" class=\"img-fluid card-img-top\">
           </div>
           <div class=\"card-body\">
               <h5 class= \"card-title\">Havana</h5>
               <p class=\"card-text\">
                   Some quick description of the product
               </p>
               <h5>
                   <span class=\"price\">Ksh.1800</span>
               </h5>
               <div class=\"col-md-12\">
                       <div class=\"form-group\">
                           <input type=\"submit\" id=\"add\" value=\"Add to Cart\" class=\"btn btn-primary\">
                           <div class=\"submitting\"></div>
                       </div>
                   </div>
           </div> 
       </div>
   </form>
    </div>

    ";
    echo $element;
}