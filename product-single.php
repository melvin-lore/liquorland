<?php
 include "header.php";
 include "db.php";

 $id=$_GET['product'];
?>
<title>Product Description</title>
    
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_2.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate mb-5 text-center">
          	<p class="breadcrumbs mb-0"><span class="mr-2"><a href="index.php">Home <i class="fa fa-chevron-right"></i></a></span> <span><a href="product.php">Products <i class="fa fa-chevron-right"></i></a></span> <span>Product Description <i class="fa fa-chevron-right"></i></span></p>
            <h2 class="mb-0 bread">Product Description</h2>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section">
    	<div class="container">
    		<div class="row">
			<?php
        				$sql = "SELECT * FROM product WHERE ID = $id ";
       						$query = mysqli_query($con,$sql);
       						 while($row = mysqli_fetch_assoc($query))
       							 {

            
     						 ?>
    			<div class="col-lg-6 mb-5 ftco-animate">
    				<a href="<?=$row['Image']?>" class="image-popup prod-img-bg"><img src="<?=$row['Image']?>" class="img-fluid" alt="#"></a>
    			</div>
    			<div class="col-lg-6 product-details pl-md-5 ftco-animate">
    				<h3><?=$row['Drink']?></h3>
    				<div class="rating d-flex">
							<p class="text-left mr-4">
								<a href="#" class="mr-2">5.0</a>
								<a href="#"><span class="fa fa-star"></span></a>
								<a href="#"><span class="fa fa-star"></span></a>
								<a href="#"><span class="fa fa-star"></span></a>
								<a href="#"><span class="fa fa-star"></span></a>
								<a href="#"><span class="fa fa-star"></span></a>
							</p>
							<p class="text-left mr-4">
								<a href="#" class="mr-2" style="color: #000;">100 <span style="color: #bbb;">Rating</span></a>
							</p>
							
						</div>
    				<p class="price"><span>Ksh.<?=$row['Price']?></span></p>
    				<p><?=$row['Description']?></p>
    				<p> 
						</p>
						<div class="row mt-4">
							<div class="input-group col-md-6 d-flex mb-3">
	             	
	             	
	          	</div>
	          	<div class="w-100"></div>
	          	
          	</div>
          	  <p><b><i class="fa fa-hourglass"> 24/7 Express Delivery</i></b></p>
			  <p><i class="fa fa-thumbs-up"> Delivery in 20-30 minutes in Riverside</i></p>

			  <div class="ftco-footer-widget mb-4">
             
              <ul class="ftco-footer-social list-unstyled mt-2">
                <li class="ftco-animate"><span class="fa fa-twitter"></span></li>
                <li class="ftco-animate"><span class="fa fa-facebook"></span></li>
                <li class="ftco-animate"><span class="fa fa-instagram"></span></li>
              </ul>
            </div>

		
    			</div>
				<?php } ?>
    		</div>
    	</div>
    </section>

 	

<?php
include "footer.php";
?>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
  <script src="js/main.js"></script>

  <script>
		$(document).ready(function(){

		var quantitiy=0;
		   $('.quantity-right-plus').click(function(e){
		        
		       
		        e.preventDefault();
		    
		        var quantity = parseInt($('#quantity').val());
		        
		
		            
		            $('#quantity').val(quantity + 1);

		          
		            
		        
		    });

		     $('.quantity-left-minus').click(function(e){
		   
		        e.preventDefault();
		       
		        var quantity = parseInt($('#quantity').val());
		        
		  
		      
		           
		            if(quantity>0){
		            $('#quantity').val(quantity - 1);
		            }
		    });
		    
		});
	</script>
    
  </body>
</html>