<?php
    require('adminheader.php');
    
    $sql= "SELECT * FROM user_orders order by Order_id desc";
    $res=mysqli_query($con,$sql); 
?>
         <div class="content pb-0">
            <div class="orders">
               <div class="row">
                  <div class="col-xl-12">
                     <div class="card">
                        <div class="card-body">
                           <h4 class="box-title">User Orders </h4>
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
                                      
                                      
                                       <th>User ID</th>
                                       <th>Product</th>
                                       <th>Price</th>
                                       <th>Quantity</th>
                                       
                                    </tr>
                                 </thead>
                                 <tbody>
                                 <?php 
							
							while($row=mysqli_fetch_assoc($res)){?>
							<tr>
							  
							   <td><?php echo $row['Order_id']?></td>
							   <td><?php echo $row['Product']?></td>
							   <td><?php echo $row['Price']?></td>
							   <td><?php echo $row['Quantity']?></td>
							  
						
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
         <div class="clearfix"></div>
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