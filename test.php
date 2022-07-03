<?php
	include "db.php";
	require_once('component.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Products</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css2?family=Spectral:ital,wght@0,200;0,300;0,400;0,500;0,700;0,800;1,200;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.min.css">
    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>

  	<div class="wrap">
			<div class="container">
				<div class="row">
					<div class="col-md-6 d-flex align-items-center">
						<p class="mb-0 phone pl-md-2">
							<a href="#" class="mr-2"><span class="fa fa-phone mr-1"></span> +254 1234 567</a> 
							<a href="#"><span class="fa fa-paper-plane mr-1"></span> liquorland@gmail.com</a>
						</p>
					</div>
					<div class="col-md-6 d-flex justify-content-md-end">
						<div class="social-media mr-4">
			    		<p class="mb-0 d-flex">
			    			<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"><i class="sr-only">Facebook</i></span></a>
			    			<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"><i class="sr-only">Twitter</i></span></a>
			    			<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"><i class="sr-only">Instagram</i></span></a>
			    			<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-dribbble"><i class="sr-only">Dribbble</i></span></a>
			    		</p>
		        </div>
		        <div class="reg">
				<p class="mb-0"><a href="register.php" class="mr-2">Sign Up</a> <a href="login.php">LogIn</a> <a href="adminlogin.php">Admin</a></p>
		        </div>
					</div>
				</div>
			</div>
		</div>
    
	  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.php">Liquor <span>Land</span></a>
	      <div class="order-lg-last btn-group">
          <a href="#" class="btn-cart dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          	<span class="flaticon-shopping-bag"></span>
          	<div class="d-flex justify-content-center align-items-center"><small>3</small></div>
          </a>
          <div class="dropdown-menu dropdown-menu-right">
				    <div class="dropdown-item d-flex align-items-start" href="#">
				    	<div class="img" style="background-image: url(images/prod-1.jpg);"></div>
				    	<div class="text pl-3">
				    		<h4>Bacardi 151</h4>
				    		<p class="mb-0"><a href="#" class="price">$25.99</a><span class="quantity ml-3">Quantity: 01</span></p>
				    	</div>
				    </div>
				    <div class="dropdown-item d-flex align-items-start" href="#">
				    	<div class="img" style="background-image: url(images/prod-2.jpg);"></div>
				    	<div class="text pl-3">
				    		<h4>Jim Beam Kentucky Straight</h4>
				    		<p class="mb-0"><a href="#" class="price">$30.89</a><span class="quantity ml-3">Quantity: 02</span></p>
				    	</div>
				    </div>
				    <div class="dropdown-item d-flex align-items-start" href="#">
				    	<div class="img" style="background-image: url(images/prod-3.jpg);"></div>
				    	<div class="text pl-3">
				    		<h4>Citadelle</h4>
				    		<p class="mb-0"><a href="#" class="price">$22.50</a><span class="quantity ml-3">Quantity: 01</span></p>
				    	</div>
				    </div>
				    <a class="dropdown-item text-center btn-link d-block w-100" href="cart.html">
				    	View All
				    	<span class="ion-ios-arrow-round-forward"></span>
				    </a>
				  </div>
        </div>

	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
	          <li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
	          <li class="nav-item dropdown active">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Products</a>
              <div class="dropdown-menu" aria-labelledby="dropdown04">
              	<a class="dropdown-item" href="product.php">Products</a>
              
                <a class="dropdown-item" href="cart.php">Cart</a>
                <a class="dropdown-item" href="checkout.php">Checkout</a>
              </div>
            </li>
	
	          <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
    
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
						<div class="row mb-4">
							<div class="col-md-12 d-flex justify-content-between align-items-center">
								<h4 class="product-select">Select Types of Products</h4>
								<select class="selectpicker" multiple>
				          <option>Brandy</option>
				          <option>Gin</option>
				          <option>Rum</option>
				          <option>Tequila</option>
				          <option>Whiskey</option>
				        </select>
							</div>
						</div>
					

    <div class="row">
      <?php
        $sql = "SELECT * FROM product LIMIT 12";
        $query = mysqli_query($con,$sql);
        while($row = mysqli_fetch_assoc($query))
        {

        
      ?>
      
      <div class="col-md-4 d-flex">
        <div class="product ftco-animate">
            <div class="img d-flex align-items-center justify-content-center" style ="background-image: url(<?=$row['Image']?>);">
              <div class="desc">
											<p class="meta-prod d-flex">
												
												<a href="product2.php" class="d-flex align-items-center justify-content-center"><span class="flaticon-visibility"></span></a>
											</p>
										</div>
            </div>
            <div class="text text-center">
            <span class="category"><?=$row['Type']?></span>
              <h2><?=$row['Drink']?></h2>
              <span class="price">Ksh.<?=$row['Price']?></span>
              <div class="col-md-12">
                       <div class="form-group">
                           <input type="submit" name="Add_To_Cart" value="Add to Cart" class="btn btn-primary">
                           <div class="submitting"></div>
						   <input type="hidden" name="Product" value="Bacardi 151">
						   <input type="hidden" name="Price" value="2000">
						   
                       </div>
                   </div>
            </div>
        </div>
      </div>
      <?php } ?>

    </div>
    
	<div class="col-md-3 col-sm-6 my-3 my-md-0">
    <form >
       <div class="card shadow">
           <div>
               <img src="./images/captain.jpg" alt="image1" class="img-fluid card-img-top">
           </div>
           <div class="card-body">
               <h5 class= "card-title">Captain Morgan</h5>
               <p class="card-text">
                   Some quick description of the product
               </p>
               <h5>
                   <span class="price">Ksh.2800</span>
               </h5>
			   <button type="submit" class="btn btn-primary">Add to Cart</button>
			  <input type="hidden" name="Product" value="Havana">
			  <input type="hidden" name="Price" value="1800">
           </div> 
       </div>
   </form>
    </div>
	<div class="col-md-3 col-sm-6 my-3 my-md-0">
    <form action="test.php" method="post">
       <div class="card shadow">
           <div>
               <img src="./images/havana.jpg" alt="image1" class="img-fluid card-img-top">
           </div>
           <div class="card-body">
               <h5 class= "card-title">Havana</h5>
               <p class="card-text">
                   Some quick description of the product
               </p>
               <h5>
                   <span class="price">Ksh.1800</span>
               </h5>
               <div class="col-md-12">
                       <div class="form-group">
                           <input type="submit" id="add" value="Add to Cart" class="btn btn-primary">
                           <div class="submitting"></div>
                       </div>
                   </div>
           </div> 
       </div>
   </form>
    </div>
	
						
			
						
						<div class="row text-center py-5">
						<div class="col-md-3 col-sm-6 my-3 my-md-0">
    <form action="test.php" method="post">
       <div class="card shadow">
           <div>
               <img src="./images/prod-10.jpg" alt="image1" class="img-fluid card-img-top">
           </div>
           <div class="card-body">
               <h5 class= "card-title">Jack Daniels</h5>
               <p class="card-text">
                   Some quick description of the product
               </p>
               <h5>
                   <span class="price">Ksh.1800</span>
               </h5>
               <div class="col-md-12">
                       <div class="form-group">
                           <input type="submit" id="add" value="Add to Cart" class="btn btn-primary">
                           <div class="submitting"></div>
                       </div>
                   </div>
           </div> 
       </div>
   </form>
    </div>
						</div>

			
						</div>
						<div class="row mt-5">
		          <div class="col text-center">
		            <div class="block-27">
		              <ul>
		                <li><a href="#">&lt;</a></li>
		                <li class="active"><span>1</span></li>
		                <li><a href="productpg2.php">2</a></li>
		              
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
                	<li><a href="#">Brandy <span class="fa fa-chevron-right"></span></a></li>
	                <li><a href="#">Gin <span class="fa fa-chevron-right"></span></a></li>
	                <li><a href="#">Rum <span class="fa fa-chevron-right"></span></a></li>
	                <li><a href="#">Tequila <span class="fa fa-chevron-right"></span></a></li>
	                <li><a href="#">Whiskey <span class="fa fa-chevron-right"></span></a></li>
                </ul>
              </div>
            </div>

       
					</div>
				</div>
			</div>
		</section>

    <footer class="ftco-footer">
      <div class="container">
        <div class="row mb-5">
          <div class="col-sm-12 col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2 logo"><a href="#">Liquor <span>Land</span></a></h2>
              <p>Far far away, behind the word mountains, far from the countries.</p>
              <ul class="ftco-footer-social list-unstyled mt-2">
                <li class="ftco-animate"><a href="#"><span class="fa fa-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="fa fa-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="fa fa-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-sm-12 col-md">
            <div class="ftco-footer-widget mb-4 ml-md-4">
              <h2 class="ftco-heading-2">My Accounts</h2>
              <ul class="list-unstyled">
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>My Account</a></li>
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Register</a></li>
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Log In</a></li>
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>My Order</a></li>
              </ul>
            </div>
          </div>
		  <div class="col-sm-12 col-md">
            <div class="ftco-footer-widget mb-4 ml-md-4">
              <h2 class="ftco-heading-2">Information</h2>
              <ul class="list-unstyled">
                <li><a href="about.php"><span class="fa fa-chevron-right mr-2"></span>About us</a></li>
                <li><a href="product.php"><span class="fa fa-chevron-right mr-2"></span>Catalog</a></li>
                <li><a href="contact.php"><span class="fa fa-chevron-right mr-2"></span>Contact us</a></li>
              
              </ul>
            </div>
          </div>
        
          <div class="col-sm-12 col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
					<li><span class="icon fa fa-map marker"></span><span class="text"> Sarit Centre, Westlands, Nairobi.</span></li>
	                <li><a href="#"><span class="icon fa fa-phone"></span><span class="text">+254 731814355</span></a></li>
	                <li><a href="#"><span class="icon fa fa-paper-plane pr-4"></span><span class="text">liquorland@gmail.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container-fluid px-0 py-5 bg-black">
      	<div class="container">
      		<div class="row">
	          <div class="col-md-12">
				<center><p class="mb-0" style="color: rgba(255,255,255,.5);">
					Copyright &copy;<script>document.write(new Date().getFullYear());</script> 
				  </p></center>
	          </div>
	        </div>
      	</div>
      </div>
    </footer>
    
  

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
