<?php
require('adminheader.php');
 $id=$_GET['useredit'];

 $result = mysqli_query($con, "SELECT * FROM users WHERE ID =$id");

 
while($res = mysqli_fetch_array($result))
{   
	$firstname = $res['firstname'];
	$lastname = $res['lastname'];
	$email = $res['email'];
	$password = $res['password'];

}

if(isset($_POST['update'])){
	
	$firstname         =$_POST['firstname'];
	$lastname          =$_POST['lastname'];
	$email             =$_POST['email'];
	$password          =sha1($_POST['password']);
	

	$sql="UPDATE users SET id='$id',firstname='$firstname',email='$email',password='$password' WHERE id = '$id'";
	$result=mysqli_query($con,$sql);

	if($result){
		echo "<script>
		alert('Successfully updated');
		window.location.href='adminusers.php';
		</script>";
	}else{
		echo "<script>
		alert('There were errors while updating');                                              
		window.location.href='adminusers.php';
		</script>";
	}

}
?>

<h4 class="box-title">Amend User details</h4>
<div class="row justify-content-center">
					<form method="POST">
					<input type="hidden" name="id" value="<?php echo $id; ?>">
			
						<tr>
							<td>Firstname</td>
							<td><input type="text" name="firstname"  value="<?php echo $firstname; ?>" class="form-control"></td>
						</tr>
						<tr>
							<td>Lastname</td>
							<td><input type="text" name="lastname" value="<?php echo $lastname; ?>" class="form-control"></td>
						</tr>
						<tr>
							<td>Email</td>
							<td><input type="email" name="email" value="<?php echo $email; ?>" class="form-control"></td>
						</tr>
						<tr>
							<td>Password</td>
							<td><input type="text" name="password"  value="<?php echo $password; ?>" class="form-control"></td>
						</tr>
						
						<tr>
						
						<td><button type="submit" name="update" class="btn btn-primary">Update</button></td>
						
						</tr>
					</form>

					<script src="assets/js/vendor/jquery-2.1.4.min.js" type="text/javascript"></script>
      <script src="assets/js/popper.min.js" type="text/javascript"></script>
      <script src="assets/js/plugins.js" type="text/javascript"></script>
      <script src="assets/js/main.js" type="text/javascript"></script>
   </body>
</html>

					