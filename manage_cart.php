<?php

session_start();



if($_SERVER["REQUEST_METHOD"]=="POST")
{
    if(isset($_POST['Add_To_Cart'])){
        if(isset($_SESSION['cart']))
        {
            $myitems=array_column($_SESSION['cart'],'Product');
            if(in_array($_POST['Product'],$myitems))
            {
                echo"<script>alert('Item Already Added');
                window.history.back()
                </script>";
            }
            else{

            
            $count=count($_SESSION['cart']);
            $_SESSION['cart'][$count]=array('Product'=>$_POST['Product'],'Price'=>$_POST['Price'],'Quantity'=>1);
            echo"<script>alert('Item Added');
            window.history.back()
            </script>";
            }

        }else{

            $_SESSION['cart'][0]=array('Product'=>$_POST['Product'],'Price'=>$_POST['Price'],'Quantity'=>1);
            echo"<script>alert('Item Added');
            window.history.back()
            </script>";

        }
    }
    if(isset($_POST['Remove_Item']))
    {
        foreach($_SESSION['cart'] as $key => $value)
        {
            if($value['Product']==$_POST['Product']){

            
            unset($_SESSION['cart'][$key]);
            $_SESSION['cart']=array_values($_SESSION['cart']);
            echo"<script>
                alert('Item Removed');
                window.location.href='cart.php';
                </script>";
            }
        }
    }
    if(isset($_POST['Mod_Quantity']))
    {
        foreach($_SESSION['cart'] as $key => $value)
        {
            if($value['Product']==$_POST['Product']){

            $_SESSION['cart'][$key]['Quantity']=$_POST['Mod_Quantity'];
        

            echo"<script>
              
            window.location.href='cart.php';
              </script>";
            }
        }
    }
}


?>