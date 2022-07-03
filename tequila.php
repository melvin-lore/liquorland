<?php
 include "header.php";
 include "db.php";

?> 
  <title>Products</title>    
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_2.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate mb-5 text-center">
          	<p class="breadcrumbs mb-0"><span class="mr-2"><a href="index.php">Home <i class="fa fa-chevron-right"></i></a></span> <span>Products <i class="fa fa-chevron-right"></i></span></p>
            <h2 class="mb-0 bread">Products</h2>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section">
			<div class="container">
				<div class="row">
					<div class="col-md-9">
						
						<div class="row">
						<?php
        					$sql = "SELECT * FROM product WHERE Type = 'Tequila' LIMIT 12";
       						 $query = mysqli_query($con,$sql);
       						 while($row = mysqli_fetch_assoc($query))
       							 {

        
     						 ?>
							<div class="col-md-4 d-flex">
							<form action="manage_cart.php" method="POST">
								<div class="product ftco-animate">
									<div class="img d-flex align-items-center justify-content-center" style="background-image: url(<?=$row['Image']?>);">
										<div class="desc">
											<p class="meta-prod d-flex">
												
												<a href="product-single.php?product=<?php echo $row['ID']; ?>" class="d-flex align-items-center justify-content-center"><span class="flaticon-visibility"></span></a>
											</p>
										</div>
									</div>
									<div class="text text-center">
										
										<span class="category"><?=$row['Type']?></span>
										<h2><?=$row['Drink']?></h2>
										<p class="mb-0"> <span class="price">Ksh.<?=$row['Price']?></span></p>
										<div class="col-md-12">
                       <div class="form-group">
                           <input type="submit" name="Add_To_Cart" value="Add to Cart" class="btn btn-primary">
                           <div class="submitting"></div>
						   
						   <input type="hidden" name="Product" value="<?=$row['Drink']?>">
						   <input type="hidden" name="Price" value="<?=$row['Price']?>">
						   
                       </div>
                   </div>
									</div>
								</div>
							</form>
							</div>
							<?php } ?>
										</div>
						<div class="row mt-5">
		          <div class="col text-center">
		            <div class="block-27">
		              <ul>
		                <li><a href="#">&lt;</a></li>
		                <li><a href="product.php">1</a></li>
		                <li class="active"><span>2</span]></li>
		              
		                <li><a href="#">&gt;</a></li>
		              </ul>
		            </div>
		          </div>
		        </div>
					</div>

					<div class="col-md-3">
						<div class="sidebar-box ftco-animate">
              <div class="categories">
                <h3>Product Types</h3>
                <ul class="p-0">
                	<li><a href="brandy.php">Brandy <span class="fa fa-chevron-right"></span></a></li>
	                <li><a href="gin.php">Gin <span class="fa fa-chevron-right"></span></a></li>
	                <li><a href="rum.php">Rum <span class="fa fa-chevron-right"></span></a></li>
	                <li><a href="tequila.php">Tequila <span class="fa fa-chevron-right"></span></a></li>
	                <li><a href="whiskey.php">Whiskey <span class="fa fa-chevron-right"></span></a></li>
                </ul>
              </div>
            </div>

       
					</div>
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
    
  </body>
</html>