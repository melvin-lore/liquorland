<?php

 include "header.php";
?>
<title>Cart</title>
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_2.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate mb-5 text-center">
          	<p class="breadcrumbs mb-0"><span class="mr-2"><a href="index.php">Home <i class="fa fa-chevron-right"></i></a></span> <span>Cart <i class="fa fa-chevron-right"></i></span></p>
            <h2 class="mb-0 bread">My Cart</h2>
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
						    	<th>Product</th>
						      <th>Price</th>
						      <th>Quantity</th>
						      <th>Total</th>
						      <th>&nbsp;</th>
						    </tr>
						  </thead>
						  <tbody class="text-center">
							  <?php
							 
							  	if(isset($_SESSION['cart']))
								  {
							  	foreach($_SESSION['cart'] as $key => $value)
								  {
									$sr=$key+1;
									
									  echo"
									<tr>
										<td>$sr</td>
									    <td>
										
										</td>
										<td><h5>
										$value[Product]</h5></td>
										<td>$value[Price]<input type='hidden' class='iprice' value='$value[Price]'</td>
										<td>
										<form action='manage_cart.php' method='POST'>
											<input class='text-center iquantity' name='Mod_Quantity' onchange='this.form.submit();' type= 'number' value='$value[Quantity]' min='1' max='10'>
											<input type='hidden' name='Product' value='$value[Product]'>
										</form>
										</td>
										<td class='itotal'></td>
										<td><form action='manage_cart.php' method='POST'>
										<button name='Remove_Item' class='btn btn-sm btn-outline-danger'>
										REMOVE
										</button>
										<input type='hidden' name='Product' value='$value[Product]'>
										</form>
										</td>
									
									</tr>
									  ";
								  }
								}
							  ?>
						
						  </tbody>
						</table>
					</div>
    		</div>

    		<div class="row justify-content-end">
    			<div class="col col-lg-5 col-md-6 mt-5 cart-wrap ftco-animate">
    				<div class="cart-total mb-3">
    					<h3>Cart Totals</h3>
    				
    					<hr>
    					<p class="d-flex total-price">
    						<span>Grand Total:</span>
    						Ksh.<span id="gtotal"></span>
    					</p>
    				</div>
					<?php
						if(isset($_SESSION['cart'])  &&count($_SESSION['cart'])>0)
						{
					?>
					<form action="purchase.php" method="POST">
						<div class="form-group">
							<label>Full Name</label>
							<input type="text" name="fullname"class="form-control" required>
						</div>
						<div class="form-group">
							<label>Phone number</label>
							<input type="tel" name="phone_no" placeholder="0700000000" pattern="[0-9]{2}[0-9]{3}[0-9]{2}[0-9]{3}" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Address</label>
							<input type="text" name="address" class="form-control" required>
						</div>
						<div class="form-check">
							<input class="form-check-input" type="radio" name="pay_mode" value="COD" id="flexRadioDefault2" checked>
							<label class="form-check-label" for="flexRadioDefault2">
								Cash on Delivery
							</label>
							
						</div>
						<div class="form-check">
							<input class="form-check-input" type="radio" name="pay_mode" value="MPESA" id="flexRadioDefault2" >
							<label class="form-check-label" for="flexRadioDefault2">
							Mpesa Classic(Buy Goods)
							Till No:<span>0000</span>
							</label>
							
						</div>
						<div class="form-check">
							<input class="form-check-input" type="radio" name="pay_mode" value="PayPal" id="flexRadioDefault2" >
							<label class="form-check-label" for="flexRadioDefault2">
							PayPal
							</label>
			
							
						</div>
						<div class="form-check">
							<input class="form-check-input" type="radio" name="pay_mode" value="Card" id="flexRadioDefault2" >
							<label class="form-check-label" for="flexRadioDefault2">
							Debit or Credit Card
							</label>
			
							
						</div>
						<div id="smart-button-container">
      <div style="text-align: center;">
        <div id="paypal-button-container"></div>
      </div>
    </div>
  
  
  						<button class="btn btn-primary py-3 px-4" name="purchase">Place Order</button>
					</form>
					<?php
						}
					?>
				
    				
					
    			</div>
    		</div>
    	</div>
    </section>
	

	<?php
include "footer.php";
?>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

  <script>
	  var gt=0;
	  var iprice=document.getElementsByClassName('iprice');
	  var iquantity=document.getElementsByClassName('iquantity');
	  var itotal=document.getElementsByClassName('itotal');
	  var gtotal=document.getElementById('gtotal');

	  function subTotal()
	  {
		  gt=0;
		  for(i=0; i<iprice.length; i++){
			  itotal[i].innerText=(iprice[i].value)*(iquantity[i].value);

			  gt=gt+(iprice[i].value)*(iquantity[i].value);
		  }
		  gtotal.innerText=gt;
	  }
	  subTotal();

  </script>
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

  <script src="https://www.paypal.com/sdk/js?client-id=sb&enable-funding=venmo&currency=USD" data-sdk-integration-source="button-factory"></script>
  <script>
    function initPayPalButton() {
      paypal.Buttons({
        style: {
          shape: 'rect',
          color: 'blue',
          layout: 'vertical',
          label: 'paypal',
          
        },

        createOrder: function(data, actions) {
          return actions.order.create({
            purchase_units: [{"amount":{"currency_code":"USD","value":1}}]
          });
        },

        onApprove: function(data, actions) {
          return actions.order.capture().then(function(orderData) {
            
            // Full available details
            console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));

            // Show a success message within this page, e.g.
            const element = document.getElementById('paypal-button-container');
            element.innerHTML = '';
            element.innerHTML = '<h3>Thank you for your payment!</h3>';

            // Or go to another URL:  actions.redirect('thank_you.html');
            
          });
        },

        onError: function(err) {
          console.log(err);
        }
      }).render('#paypal-button-container');
    }
    initPayPalButton();
  </script>
	
  </body>
</html>