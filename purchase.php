<?php

session_start();
include "db.php";

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    if(isset($_POST['purchase']))
    {
        $query1="INSERT INTO `order_manager`(`Full_Name`, `Phone_No`, `Address`, `Pay_Mode`) VALUES ('$_POST[fullname]','$_POST[phone_no]','$_POST[address]','$_POST[pay_mode]')";
        if(mysqli_query($con,$query1))
        {
            $Order_id=mysqli_insert_id($con);
            $query2="INSERT INTO `user_orders`(`Order_id`, `Product`, `Price`, `Quantity`) VALUES (?,?,?,?)";
            $stmt=mysqli_prepare($con,$query2);
            if($stmt)
            {
                mysqli_stmt_bind_param($stmt,"isii",$Order_id,$Product,$Price,$Quantity);
                foreach($_SESSION['cart'] as $key => $values)
                {
                    $Product=$values['Product'];
                    $Price=$values['Price'];
                    $Quantity=$values['Quantity'];
                    mysqli_stmt_execute($stmt);
                }
                unset($_SESSION['cart']);
                echo"<script>
                alert('Your Order has been Placed!');
                window.location.href='index.php';
                </script>";
            }else{
                echo"<script>
                    alert('SQL Query Prepare Error');
                    window.location.href='cart.php';
                    </script>";
            }
        }
        else
        {
            echo"<script>
            alert('SQL error');
            window.location.href='cart.php';
            </script>";
        }
    }
}


?>