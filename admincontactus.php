<?php
require('adminheader.php');


$sql="SELECT * from contact order by ID asc";
$res=mysqli_query($con,$sql);
?>

<div class="content pb-0">
	<div class="orders">
	   <div class="row">
		  <div class="col-xl-12">
			 <div class="card">
				<div class="card-body">
				   <h4 class="box-title">Contact Us </h4>
				</div>
				<div class="card-body--">
				   <div class="table-stats order-table ov-h">
					  <table class="table ">
						 <thead>
							<tr>
						
							   <th>ID</th>
							   <th>Name</th>
							   <th>Email</th>
							   <th>Subject</th>
							   <th>Message</th>
							   <th>Date/Time</th>
							  
							   <th></th>
							</tr>
						 </thead>
						 <tbody>
							<?php 
							
							while($row=mysqli_fetch_assoc($res)){?>
							<tr>
							  
							   <td><?php echo $row['id']?></td>
							   <td><?php echo $row['name']?></td>
							   <td><?php echo $row['email']?></td>
							   <td><?php echo $row['subject']?></td>
							   <td><?php echo $row['message']?></td>
							   <td><?php echo $row['date_added']?></td>
						
							   <td>
								
							   </td>
							</tr>
							<?php } ?>
						 </tbody>
					  </table>
				   </div>
				</div>
			 </div>
		  </div>
	   </div>
	</div>
</div>
<footer class="site-footer">
             <div class="footer-inner bg-white">
                 <div class="row">
                     <div class="col-sm-6">
                         Copyright &copy; 2021 Melvin Lore
                     </div>
                 </div>
             </div>
         </footer>
    
      </div>
      <script src="assets/js/vendor/jquery-2.1.4.min.js" type="text/javascript"></script>
      <script src="assets/js/popper.min.js" type="text/javascript"></script>
      <script src="assets/js/plugins.js" type="text/javascript"></script>
      <script src="assets/js/main.js" type="text/javascript"></script>
   </body>
</html>