<?php
include("db.php");

session_start();

	

	if(isset($_GET['logout'])){
		session_destroy();
		unset($_SESSION);
		header("Location: adminhme.php");
	}
	

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Admin</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css2?family=Spectral:ital,wght@0,200;0,300;0,400;0,500;0,700;0,800;1,200;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    
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
		        	<p class="mb-0"> <a href="index.php?logout=true">LogOut</a> <a href="adminlogin.php">Admin</a></p>
		        </div>
					</div>
				</div>
			</div>
		</div>
    
	  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.php">LiquorLand <span>//Administration</span></a>
	      <div class="order-lg-last btn-group">
          <a href="#" class="btn-cart dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          	
          	
          </a>
         
        </div>

	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item"><a href="#" class="nav-link">Products</a></li>
	          <li class="nav-item"><a href="#" class="nav-link">Users</a></li>
	
            
            </li>
	    
	         
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
          	<p class="breadcrumbs mb-0"><span class="mr-2"><a href="index.php">Home <i class="fa fa-chevron-right"></i></a></span> <span>Admin Home <i class="fa fa-chevron-right"></i></span></p>
            <h2 class="mb-0 bread">Products</h2>
          </div>
        </div>
      </div>
    </section>
	<section class="ftco-section">
    	<div class="container">
    		<div class="row">
    			<div class="table-wrap">
						<table class="table">
						  <thead class="thead-primary">
						    <tr>
						    	<th>&nbsp;</th>
						    	<th>&nbsp;</th>
						    	<th>ID</th>
						      <th>Drink</th>
						      <th>Type</th>
						      <th>Price</th>
							  <th>Description</th>
							  <th>Image</th>
							  <th>Actions</th>
						      <th>&nbsp;</th>
						    </tr>
						  </thead>
						  <tbody>
						 
						  </tbody>
						</table>
					</div>
    		</div>
			<?php
					

			?>
			<h3 class="panel-title">
				<i class="fa fa-money fa-fa"></i>Insert Product</h3>
			<form method="POST" class="form-horizontal" enctype="multipart/form-data">
				<div class="form-group">
					<label class="col-md-6 control-label">Drink</label>
					<div class="col-md-6"> 
						<input name="drink_title" type="text" class="form-control" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-6 control-label">Type</label>
					<div class="col-md-6"> 
						<select name="cat" class="form-control">
							<option>Select Drink Type</option>
							<?php
								$get_cat = "SELECT * FROM categories";
								$run_cat = mysqli_query($con,$get_cat);

								while ($row_cat = mysqli_fetch_array($run_cat)){
									$ID = $row_cat['ID'];
									$$drink_type = $row_cat['drink_type'];

									echo "
									
									<option value='$ID'> $$drink_type</option>
									";
								}
							?>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-6 control-label">Price</label>
					<div class="col-md-6"> 
						<input name="drink_price" type="text" class="form-control" required>
					</div>
				</div>
		
				<div class="form-group">
					<label class="col-md-6 control-label">Description</label>
					<div class="col-md-6"> 
						<input name="drink_description" type="text" class="form-control" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-6 control-label">Image</label>
					<div class="col-md-6"> 
						<input name="drink_image" type="file" class="form-control" required>
					</div>
				</div>
				<div class="col-md-12">
						<div class="form-group">
							<input name="submit" value="Submit" type="submit" class="btn btn-primary">
								<div class="submitting"></div>
									</div>
							</div>
			</form>
    
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
  <script src="js/main.js"></script>
    

  </body>
</html>

<?php
if(isset($_POST['submit'])){
	$drink_title = $_POST['drink_title'];
	$cat = $_POST['cat'];
	$drink_price = $_POST['drink_price'];
	$drink_description = $_POST['drink_description'];

	$drink_image = $_FILES['drink_image']['name'];

	$temp_name = $_FILES['drink_image']['tmp_name'];

	move_uploaded_file($temp_name,"images/$drink_image");

	$insert_product = "insert into product (Drink,Type,Price,Description,Image) values 
	('$drink_title','$cat',NOW(),'$drink_price','$drink_description','$drink_image')";

	$run_product = mysqli_query($con, $insert_product);


}
	

?>