<?php
$mysqli = new mysqli('localhost','root','root','demo') or die('Kết nối thất bại!');
        mysqli_query($mysqli, 'SET NAMES UTF8');
       
        if (isset($_GET['delete'])){
     $ten = $_GET['delete'];
     $mysqli->query("DELETE FROM Sach WHERE Ten = '$ten'") 
             or die($mysqli->error);
     $_SESSION['message']="Đã xoá sản phẩm";
     $_SESSION['msg_type']="nguy hiểm";
    
     header('location:product.php');


 }
   
?>
