<?php
require_once('config1.php');
include "header.php";
?>

<title>Sign Up</title>    
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_2.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate mb-5 text-center">
          	<p class="breadcrumbs mb-0"><span class="mr-2"><a href="index.php">Home <i class="fa fa-chevron-right"></i></a></span> <span>Sign Up <i class="fa fa-chevron-right"></i></span></p>
            <h2 class="mb-0 bread">Sign Up</h2>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section bg-light">
	<form action="registration.php" method="post">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-12">
						<div class="wrapper px-md-4">
			            
							<div class="row no-gutters">
								<div class="col-md-7">
									<div class="contact-wrap w-100 p-md-5 p-4">
										<h3 class="mb-4">Sign Up</h3> 
										<form method="POST" id="registrationForm" name="registrationForm" class="contactForm">
											<div class="row">
                                            <div class="col-md-6"> 
													<div class="form-group">
														<label class="label" for="fname">First Name</label>
														<input type="text" class="form-control" name="firstname" id="firstname" placeholder="First Name" required>
													</div>
												</div>
                                                <div class="col-md-6"> 
													<div class="form-group">
														<label class="label" for="lname">Last Name</label>
														<input type="text" class="form-control" name="lastname" id="lastname" placeholder="Last Name" required>
													</div>
												</div>
												<div class="col-md-6"> 
													<div class="form-group">
														<label class="label" for="email">Email Address</label>
														<input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
													</div>
												</div>
												<div class="col-md-12">
													<div class="form-group">
														<label class="label" for="subject">Password</label>
														<input type="password" class="form-control" name="password" id="password" placeholder="Enter Password" required>
													</div>
												</div>
												
												<div class="col-md-12">
													<div class="form-group">
														<input type="submit" value="Sign Up" id="register" class="btn btn-primary">
														<div class="submitting"></div>
													</div>
												</div>
											</div>
										</form>
									</div>
								</div>
                                <div class="col-md-5 order-md-first d-flex align-items-stretch">
                                <img src="images/unsplash3.jpg" class="img-fluid" alt="?">
								</div>
							</div>
                          
						</div>
					</div>
				</div>
			</div>
			</form>
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
  <script src="js/main.js"></script>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
  <script type="text/javascript">
    $(function(){
        $('#register').click(function(e){
            var valid = this.form.checkValidity();
            if(valid){

                var firstname       =$('#firstname').val();
                var lastname        =$('#lastname').val();
                var email           =$('#email').val(); 
                var password        =$('#password').val();  

                e.preventDefault();
                $.ajax({
                    type: 'POST',
                    url: 'process.php',
                    data: { firstname: firstname,lastname: lastname,email: email,password: password},
                
                success: function(data){

            Swal.fire({
            'title': 'Successful',
            'text': 'Successfully registered',
            'type': 'success'

          

        })
        window.location.href='login.php';

                },
                error: function(data){
            Swal.fire({
            'title': 'Errors',
            'text': 'There were errors while saving the data',
            'type': 'error'
            })

        }

                });
            

               
            }else{
                
            }

           
        });
    
    });


</script>
  </body>
</html>