<?php
require_once('config1.php');
?>
<?php

  if(isset($_POST)){
        $name              =$_POST['name'];
        $email             =$_POST['email'];
        $subject           =($_POST['subject']);
        $message           =($_POST['message']);

        $sql = "INSERT INTO contact (name, email, subject, message ) VALUES(?,?,?,?)";
        $stmtinsert = $db->prepare($sql);
        $result = $stmtinsert->execute([$name, $email, $subject, $message]);
        
        if($result){
            echo 'Successfully saved.';
        }else{
            echo 'There were errors while saving the data.';
        }
        
    }else{
        echo 'No data';
    }