<?php

include "db.php";

$id = $_GET['id']; 

$del = mysqli_query($db,"delete from contact where id = '$id'"); 

if($del)
{
    mysqli_close($db);
    header("location:admincontactus.php"); 
    exit;	
}
else
{
    echo "Error deleting record"; 
}
?>