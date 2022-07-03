<?php
require('adminheader.php');
 $id=$_GET['edit'];

 $result = mysqli_query($con, "SELECT * FROM product WHERE ID =$id");

 
while($res = mysqli_fetch_array($result))
{   
	$Drink = $res['Drink'];
	$Type = $res['Type'];
	$Price = $res['Price'];
	$Description = $res['Description'];
	$Image = $res['Image'];
}
                                                                                     
if(isset($_POST['update'])){
	
	$Drink           =$_POST['Drink'];
	$Type            =$_POST['Type'];
	$Price           =$_POST['Price'];
	$Description     =$_POST['Description'];
	$Image           =$_POST['Image'];

	$sql="UPDATE product SET ID='$id',Drink='$Drink',Type='$Type',Price='$Price',Description='$Description',Image='$Image' WHERE ID = '$id'";
	$result=mysqli_query($con,$sql);

	if($result){
		echo "<script>
		alert('Successfully updated');
		window.location.href='adminproduct.php';
		</script>";
	}else{
		echo "<script>
		alert('There were errors while updating');
		window.location.href='adminproduct.php';
		</script>";
	}

}
?>

<h4 class="box-title">Amend Product details</h4>
<div class="row justify-content-center">
					<form method="POST">
					<input type="hidden" name="id" value="<?php echo $id; ?>">
			
						<tr>
							<td>Drink</td>
							<td><input type="text" name="Drink"  value="<?php echo $Drink; ?>" class="form-control"></td>
						</tr>
						<tr>
							<td>Type</td>
							<td><input type="text" name="Type" value="<?php echo $Type; ?>" class="form-control"></td>
						</tr>
						<tr>
							<td>Price</td>
							<td><input type="number" name="Price" value="<?php echo $Price; ?>" class="form-control"></td>
						</tr>
						<tr>
							<td>Description</td>
							<td><input type="text" name="Description"  value="<?php echo $Description; ?>" class="form-control"></td>
						</tr>
						<tr>
							<td>Image</td>
							<td><input type="text" name="Image"  value="<?php echo $Image; ?>" class="form-control"></td>
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

					