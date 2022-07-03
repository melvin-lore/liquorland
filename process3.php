
<?php
include 'config1.php';

$update = false;
$id = 0;
$Drink           ='';
$Type            ='';
$Price           ='';
$Description     ='';
$Image           ='';


  if(isset($_POST['save'])){
        $Drink           =$_POST['Drink'];
        $Type            =$_POST['Type'];
        $Price           =($_POST['Price']);
        $Description     =($_POST['Description']);
        $Image           =($_POST['Image']);

        $sql= "INSERT INTO product (Drink, Type, Price, Description, Image) VALUES(?,?,?,?,?)";
        $stmtinsert = $db->prepare($sql);
        $result = $stmtinsert->execute([$Drink, $Type, $Price, $Description, $Image]);
        
        if($result){
            echo "<script>
            alert('Successfully saved');
            window.location.href='adminproduct.php';
            </script>";
        }else{
            echo "<script>
            alert('There were errors while saving');
            window.location.href='adminproduct.php';
            </script>";
        }
 
    }
    
  
    
    
    
       
