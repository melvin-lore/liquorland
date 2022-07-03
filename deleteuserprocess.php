<?php
$mysqli = new mysqli('localhost','root','','liqourland') or die(mysqli_error($mysqli));

if (isset($_GET['delete'])){
    $id = $_GET['delete'];
    $mysqli->query("DELETE FROM users WHERE id=$id");
    echo "<script>
    alert('Successfully deleted');
    window.location.href='adminproduct.php';
    </script>";

}