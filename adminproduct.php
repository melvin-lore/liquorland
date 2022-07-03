<?php
require('adminheader.php');


$sql="SELECT * from product order by ID asc";
$res=mysqli_query($con,$sql);
?>


<div class="content pb-0">
	<div class="orders">
	   <div class="row">
		  <div class="col-xl-12">
			 <div class="card">
				<div class="card-body">
				   <h4 class="box-title">Products </h4>
				</div>
				<form method="post" action="data-print.php" target="_new" class="form-inline">
                           <div class="form-group">
                             
                            <button type="submit" name="search" onclick="printPage()" class="btn btn-primary">Print Data</button>
                     
                            </div>
                           </form>
				<div class="card-body--">
				   <div class="table-stats order-table ov-h">
					  <table class="table ">
						 <thead>
							<tr>
							   
							   <th>ID</th>
							   <th>Drink</th>
							   <th>Type</th>
							   <th>Price</th>
							   <th>Description</th>
                               <th>Image</th>
							   <th>Action</th>
							  
							   <th></th>
							</tr>
						 </thead>
						 <tbody>
							<?php 
						    
							while($row=mysqli_fetch_assoc($res)){?>
							<tr>
							
							   <td><?php echo $row['ID']?></td>
							   <td><?php echo $row['Drink']?></td>
							   <td><?php echo $row['Type']?></td>
							   <td><?php echo $row['Price']?></td>
							   <td><?php echo $row['Description']?></td>
                               <td><?php echo $row['Image']?></td>
							 
							   <td>
								<h5><a href="amendproducts.php?edit=<?php echo $row['ID']; ?>"
									class="btn btn-info">Edit</a></h5>
							   </td>
							   <td>
								<h5><a href="deleteprocess.php?delete=<?php echo $row['ID']; ?>"
									class="btn btn-danger">Delete</a></h5>
							   </td>
							</tr>
							<?php } ?>
						 </tbody>
					  </table>
				   </div>
				</div>
				<?php require_once 'process3.php'; ?>

				<div class="row justify-content-center">
					<form action="process3.php" method="POST">
					<input type="hidden" name="id" value="<?php echo $id; ?>">
					
						<div class="form-group">
							<label>Drink</label>
							<input type="text" name="Drink" value="<?php echo $Drink; ?>" class="form-control">
						</div>
						<div class="form-group">
							<label>Type</label>
							<input type="text" name="Type" value="<?php echo $Type; ?>" class="form-control">
						</div>
						<div class="form-group">
							<label>Price</label>
							<input type="number" name="Price"  value="<?php echo $Price; ?>" class="form-control">
						</div>
						<div class="form-group">
							<label>Description</label>
							<input type="text" name="Description"  value="<?php echo $Description; ?>" class="form-control">
						</div>
						<div class="form-group">
							<label>Image</label>
							<input type="text" name="Image"  value="<?php echo $Image; ?>" class="form-control">
						</div>
						<div class="form-group">
						
							<button type="submit" name="save" class="btn btn-primary">Save</button>
						
						</div>
					</form>
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
	  <script>
    function printPage() {
        window.print();
    }
</script>
   </body>
</html>