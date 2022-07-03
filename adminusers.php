<?php
    require('adminheader.php');
    
    $sql= "SELECT * FROM users";
    $res=mysqli_query($con,$sql); 
?>
         <div class="content pb-0">
            <div class="orders">
               <div class="row">
                  <div class="col-xl-12">
                     <div class="card">
                        <div class="card-body">
                           <h4 class="box-title">Registered Users </h4>
                        </div>
                        <div class="card-body--">
                           <div class="table-stats order-table ov-h">
                              <table class="table ">
                                 <thead>
                                    <tr>
                                      
                                      
                                       <th>User ID</th>
                                       <th>Firstname</th>
                                       <th>Lastname</th>
                                       <th>Email</th>
                                       <th>Password</th>
                                       <th>Action</th>
                                       <th></th>
                                       
                                    </tr>
                                 </thead>
                                 <tbody>
                                 <?php 
							
							while($row=mysqli_fetch_assoc($res)){?>
							<tr>
							  
							   <td><?php echo $row['id']?></td>
							   <td><?php echo $row['firstname']?></td>
							   <td><?php echo $row['lastname']?></td>
							   <td><?php echo $row['email']?></td>
                               <td><?php echo $row['password']?></td>	
                               <td>
								<h5><a href="amendusers.php?useredit=<?php echo $row['id']; ?>"
									class="btn btn-info">Edit</a></h5>
							   </td>
							   <td>
								<h5><a href="deleteuserprocess.php?delete=<?php echo $row['id']; ?>"
									class="btn btn-danger">Delete</a></h5>
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
   </body>
</html>