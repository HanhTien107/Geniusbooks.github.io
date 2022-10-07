<?php
$update= false;
        $mysqli = new mysqli('localhost','root','root','demo') or die('Kết nối thất bại!');
        mysqli_query($mysqli, 'SET NAMES UTF8');

  
   if(isset($_POST['save'])){
     
       $ten = $_POST['ten'];
      $anh = $_FILES['image']['tmp_name'];
      getimagesize($_FILES["image"]["temp_name"]); 
    
     $gia = $_POST['gia']; 
     $theloai = $_POST['theloai']; 
     $mota = $_POST['mota']; 
     $mysqli->query("INSERT INTO Sach(Ten,Image,Gia,Theloai,mota) VALUES('$ten','$anh','$gia','$theloai','$mota')")
             or die($mysqli->error);
     
     $_SESSION['message']="Sản phẩm đã được lưu !";
     $_SESSION['msg_type']="Success";
     
     
        }
        
       if(isset($_GET['edit'])){
      $id = $_GET['edit'];
      $update= true;
      $result =  $mysqli->query("SELECT * FROM Sach WHERE id = $id") 
             or die($mysqli->error());
       if(count($result)==1){
           $row = $result->fetch_array();
        
            $anh = $row['Image'];
            $ten = $row['Ten'];
            $gia = $row['Gia'];
            $theloai = $row['Theloai'];
            $mota = $row['mota'];
           
         }
       }
       
   if(isset($_POST['update'])){

          $id = $_POST['id'];
          $ten = $_POST['ten'];
       $anh = $_FILES['image']['tmp_name'];

     $gia = $_POST['gia']; 
     $theloai = $_POST['theloai']; 
     $mota = $_POST['mota']; 
          $mysqli->query("UPDATE Sach SET Ten = '$ten', Image = '$anh', Gia = '$gia', Theloai='$theloai', mota='$mota' WHERE id =$id") 
          or die($mysqli->error);
          $_SESSION['message']="Đã cập nhật Admin!";
          $_SESSION['msg_type']="warning";
       
      }
            if (isset($_GET['delete'])){
     $id = $_GET['delete'];
     $mysqli->query("DELETE FROM Sach WHERE id = $id") 
             or die($mysqli->error);
     $_SESSION['message']="Đã xoá sản phẩm";
     $_SESSION['msg_type']="nguy hiểm";
    
    


 }
 
 
header('location:product.php');
 
 
 ?>
