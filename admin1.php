<?php
    require('adminheader.php');
    
    $sql= "SELECT * FROM order_manager order by Order_id desc";
    $res=mysqli_query($con,$sql); 
?>

         <div class="content pb-0">
            <div class="orders">
               <div class="row">
                  <div class="col-xl-12">
                     <div class="card">
                        <div class="card-body">
                           <h4 class="box-title">Orders </h4>

                        </div>
                        <div class="dashboard">
                        
                        <div class="content-block stat">
                                                                                         
                        <div>
                        <h4><i class="fa fa-user" aria-hidden="true">Total Accounts</i></h4>
                           <?php

                           $sql = "SELECT * FROM users";
                              if ($result=mysqli_query($con,$sql)) {
                                 $rowcount=mysqli_num_rows($result);
                                    echo $rowcount; 
                               }
                             ?>
                           </div>
            
                           </div>
                        <div class="content-block stat">
                      
                        <div>
                           <h4><i class="fa fa-product-hunt" aria-hidden="true">Total Products</i></h4>
                           <?php

                           $sql = "SELECT * FROM product";
                              if ($result=mysqli_query($con,$sql)) {
                                  $rowcount=mysqli_num_rows($result);
                                    echo $rowcount; 
                                          }
                                 ?>
                        </div>
                     
                        </div>
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
                                       <th>Order ID</th>
                                       <th>Name</th>
                                       <th>Phone Number</th>
                                       <th>Address</th>
                                       <th>Date Added</th>
                                       <th>Pay_Mode</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                 <?php 
							
							while($row=mysqli_fetch_assoc($res)){?>
							<tr>
							  
							   <td><?php echo $row['Order_id']?></td>
							   <td><?php echo $row['Full_Name']?></td>
							   <td><?php echo $row['Phone_No']?></td>
							   <td><?php echo $row['Address']?></td>
                        <td><?php echo $row['date_added']?></td>
							   <td><?php echo $row['Pay_Mode']?></td>
						
							   
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